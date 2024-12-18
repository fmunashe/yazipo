<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CalendarWidget;
use Filament\Pages\Dashboard\Concerns\HasFiltersAction;

class EventsDashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersAction;

    protected static ?string $title = 'Events Calendar';
    protected static string $routePath = 'events-calendar';
    protected static ?string $navigationGroup = 'Events Calendar';
    protected static ?string $navigationIcon = '';

    public function getWidgets(): array
    {

        if ($this->checkRole()) {
            return [
                CalendarWidget::class
            ];
        }
        return [
//            DefaultNoAccessMedicalProviderWidget::class
        ];
    }

    public function getColumns(): int|string|array
    {
        return [
            'sm' => 1,
            'md' => 6,
            'xl' => 12,
        ];
    }

    protected function getHeaderActions(): array
    {
//        if ($this->checkRole()) {
//            return [
//                FilterAction::make()
//                    ->form([
//                        Select::make('sex')
//                            ->label('Gender')
//                            ->searchable()
//                            ->options(CustomerSatisfactionSurvey::SEX_SELECT),
//                        Select::make('status')
//                            ->label('Referral Status')
//                            ->searchable()
//                            ->options(Referral::STATUSES_SELECT),
//                        DatePicker::make('startDate'),
//                        DatePicker::make('endDate'),
//                    ]),
//            ];
//        }
        return [];
    }

    private function checkRole()
    {
        return true;
//        return auth()->user()->roles()->whereHas('permissions', function ($query) {
//            $query->where('title', 'medical_provider_dashboard_access');
//        })->exists();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
//        return auth()->user()->roles()->whereHas('permissions', function ($query) {
//            $query->where('title', 'medical_provider_dashboard_access');
//        })->exists();
    }
}
