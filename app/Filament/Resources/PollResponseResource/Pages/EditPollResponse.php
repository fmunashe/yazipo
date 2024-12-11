<?php

namespace App\Filament\Resources\PollResponseResource\Pages;

use App\Filament\Resources\PollResponseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPollResponse extends EditRecord
{
    protected static string $resource = PollResponseResource::class;

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
