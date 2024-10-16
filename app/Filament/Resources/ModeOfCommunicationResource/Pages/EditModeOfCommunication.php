<?php

namespace App\Filament\Resources\ModeOfCommunicationResource\Pages;

use App\Filament\Resources\ModeOfCommunicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditModeOfCommunication extends EditRecord
{
    protected static string $resource = ModeOfCommunicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
