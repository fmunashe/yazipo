<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\CDR;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalArticles extends BaseWidget
{
    protected int|string|array $columnSpan = 6;

    protected function getStats(): array
    {
        return [
            Stat::make('',
                Article::all()
                    ->count()
            )
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->description('Total Unique Articles')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
        ];
    }

    public function getColumns(): int
    {
        return 1;
    }
}
