<?php

namespace App\Filament\Resources\CaseFileResource\Pages;

use App\Filament\Resources\CaseFileResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCaseFile extends ViewRecord
{
    protected static string $resource = CaseFileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
