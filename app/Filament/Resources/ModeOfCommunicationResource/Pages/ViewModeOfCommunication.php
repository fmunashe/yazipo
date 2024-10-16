<?php

namespace App\Filament\Resources\ModeOfCommunicationResource\Pages;

use App\Filament\Resources\ModeOfCommunicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewModeOfCommunication extends ViewRecord
{
    protected static string $resource = ModeOfCommunicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
