<?php

namespace App\Filament\Resources\OnDemandServiceResource\Pages;

use App\Filament\Resources\OnDemandServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOnDemandService extends EditRecord
{
    protected static string $resource = OnDemandServiceResource::class;

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
