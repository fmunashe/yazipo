<?php

namespace App\Filament\Resources\VideoResource\Pages;

use App\Filament\Resources\VideoResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = Storage::disk('public')->mimeType($data['attachment']);
        $data['disk'] = "public";
        $data['path'] = $data['attachment'];
        return $data;
    }
}
