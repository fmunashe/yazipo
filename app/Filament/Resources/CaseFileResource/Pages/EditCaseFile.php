<?php

namespace App\Filament\Resources\CaseFileResource\Pages;

use App\Filament\Resources\CaseFileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCaseFile extends EditRecord
{
    protected static string $resource = CaseFileResource::class;

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
