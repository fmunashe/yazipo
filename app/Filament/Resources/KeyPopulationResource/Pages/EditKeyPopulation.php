<?php

namespace App\Filament\Resources\KeyPopulationResource\Pages;

use App\Filament\Resources\KeyPopulationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeyPopulation extends EditRecord
{
    protected static string $resource = KeyPopulationResource::class;

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
