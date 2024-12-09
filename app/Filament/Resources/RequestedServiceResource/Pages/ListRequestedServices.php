<?php

namespace App\Filament\Resources\RequestedServiceResource\Pages;

use App\Filament\Resources\RequestedServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRequestedServices extends ListRecords
{
    protected static string $resource = RequestedServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
