<?php

namespace App\Filament\Resources\KeyPopulationResource\Pages;

use App\Filament\Resources\KeyPopulationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKeyPopulation extends ViewRecord
{
    protected static string $resource = KeyPopulationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
