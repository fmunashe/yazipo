<?php

namespace App\Filament\Resources\DictionaryResource\Pages;

use App\Filament\Resources\DictionaryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDictionary extends ViewRecord
{
    protected static string $resource = DictionaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
