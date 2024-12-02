<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ImageUrlObserver
{
    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
        $urls = [];
        if ($article->image_urls != null) {
            foreach ($article->image_urls as $url) {
                $urls[] = Storage::disk('public')->url($url);
            }
            $article->update([
                'image_urls' => $urls
            ]);
        }
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
