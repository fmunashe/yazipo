<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\CDR;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewArticlesThisMonth extends BaseWidget
{
    protected int|string|array $columnSpan = 6;

    protected function getStats(): array
    {
        return [
            Stat::make('',
                Article::whereBetween('created_at', [Carbon::parse('first day of this month'), Carbon::parse('last day of this month')])->count()
            )
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('New Articles This Month')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
        ];
    }

    public function getColumns(): int
    {
        return 1;
    }
}
