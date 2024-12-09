<?php

namespace App\Filament\Resources\RequestedServiceResource\Pages;

use App\Filament\Resources\RequestedServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRequestedService extends EditRecord
{
    protected static string $resource = RequestedServiceResource::class;

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
