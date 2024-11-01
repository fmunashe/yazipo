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
        $data['type'] = Storage::disk('videos_disk')->mimeType($data['attachment']);
        $data['disk'] = "videos_disk";
//        $path = $data['attachment']->store('videos', 'videos_disk');
//        $data['path'] = $path;
        return $data;
    }
}
