<?php

namespace App\Filament\Resources\PollResponseResource\Pages;

use App\Filament\Resources\PollResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPollResponse extends ViewRecord
{
    protected static string $resource = PollResponseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
