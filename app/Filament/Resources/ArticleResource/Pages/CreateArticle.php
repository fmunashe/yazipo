<?php

namespace App\Filament\Resources\ArticleResource\Pages;

use App\Filament\Resources\ArticleResource;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;

    public static function afterSave(Form $form, $record): void
    {
        if ($form->getState()['image_urls']) {
            $urls = collect($form->getState()['image_urls'])->map(function ($file) {
                env('APP_URL')."/storage/". Storage::disk('public')->url($file);
            });

            $record->update([
                'image_urls' => $urls->toArray()
            ]);
        }
    }
}
