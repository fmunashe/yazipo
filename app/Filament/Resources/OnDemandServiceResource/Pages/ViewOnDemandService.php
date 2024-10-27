<?php

namespace App\Filament\Resources\OnDemandServiceResource\Pages;

use App\Filament\Resources\OnDemandServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOnDemandService extends ViewRecord
{
    protected static string $resource = OnDemandServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
