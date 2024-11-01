<?php

namespace App\Observers;

use App\Jobs\ConvertVideoForStreaming;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoConverter
{
    /**
     * Handle the Video "created" event.
     */
    public function created(Video $video): void
    {
//        ConvertVideoForStreaming::dispatch($video);
    }

    /**
     * Handle the Video "deleted" event.
     *
     * @param \App\Models\Video $video
     * @return void
     */
    public function deleted(Video $video)
    {
        if ($video->path) {
            Storage::disk('videos_disk')->delete($video->path);

            $files = Storage::disk('streamable_videos')->files();
            $filesToDelete = array_filter($files, function ($file) use ($video) {
                return (str_starts_with(basename($file), $video->id . '_') || str_starts_with(basename($file), $video->id . '.'));
            });

            foreach ($filesToDelete as $file) {
                Storage::disk('streamable_videos')->delete($file);
            }
        }
    }
}
