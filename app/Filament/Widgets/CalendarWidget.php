<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\EventResource;
use App\Models\Event;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Auth;
use Saade\FilamentFullCalendar\Data\EventData;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class CalendarWidget extends FullCalendarWidget
{
    public string|null|\Illuminate\Database\Eloquent\Model $model = Event::class;

    public function getFormSchema(): array
    {
        return [
            Select::make('user_id')
                ->searchable()
                ->relationship('user', 'name')
                ->preload()
                ->required()
                ->default(Auth::user()->name),
            TextInput::make('name'),
            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),
                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

    public function fetchEvents(array $fetchInfo): array
    {
        $query = Event::query()
            ->where('starts_at', '>=', $fetchInfo['start'])
            ->where('ends_at', '<=', $fetchInfo['end'])
            ->get();

        $role = Auth::user()->hasRole("Admin");
        if (!$role) {
            $query = Event::query()
                ->where('user_id', '=', \auth()->user()->id)
                ->where('starts_at', '>=', $fetchInfo['start'])
                ->where('ends_at', '<=', $fetchInfo['end'])
                ->get();
        }

        return $query
            ->map(
                fn(Event $event) => EventData::make()
                    ->id($event->id)
                    ->title($event->name)
                    ->start($event->starts_at)
                    ->end($event->ends_at)
                    ->url(
                        url: EventResource::getUrl(name: 'view', parameters: ['record' => $event]),
                        shouldOpenUrlInNewTab: true
                    )
            )
            ->toArray();
//            ->map(
//                fn(Event $event) => [
//                    'title' => $event->name,
//                    'start' => $event->starts_at,
//                    'end' => $event->ends_at,
//                    'url' => EventResource::getUrl(name: 'view', parameters: ['record' => $event]),
//                    'shouldOpenUrlInNewTab' => true
//                ]
//            )
//            ->all();
    }
}
