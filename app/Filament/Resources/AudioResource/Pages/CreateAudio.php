<?php

namespace App\Filament\Resources\AudioResource\Pages;

use App\Filament\Resources\AudioResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateAudio extends CreateRecord
{
    protected static string $resource = AudioResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = Storage::disk('public')->mimeType($data['path']);
        $data['disk'] = "public";
        return $data;
    }
}
