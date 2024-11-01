<?php

namespace App\Providers;

use App\Models\Video;
use App\Observers\VideoConverter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Video::observe(VideoConverter::class);
    }
}
