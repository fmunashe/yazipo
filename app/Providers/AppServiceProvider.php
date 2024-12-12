<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Video;
use App\Observers\ImageUrlObserver;
use App\Observers\VideoConverter;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        FilamentView::registerRenderHook(
            PanelsRenderHook::USER_MENU_PROFILE_BEFORE,
            fn(): View => view('customFooter'),
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Video::observe(VideoConverter::class);
        Article::observe(ImageUrlObserver::class);
    }
}
