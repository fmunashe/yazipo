<?php

namespace App\Filament\Resources\RequestedServiceResource\Pages;

use App\Filament\Resources\RequestedServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRequestedService extends ViewRecord
{
    protected static string $resource = RequestedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
