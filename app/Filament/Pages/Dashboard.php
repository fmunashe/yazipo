<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DefaultNoAccessMainDashboardWidget;
use App\Filament\Widgets\DialAServiceChart;
use App\Filament\Widgets\NewArticlesThisMonth;
use App\Filament\Widgets\OpportunitiesChart;
use App\Filament\Widgets\SchoolReportChart;
use App\Filament\Widgets\TotalArticles;
use Filament\Pages\Dashboard\Concerns\HasFiltersAction;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersAction;

    protected static ?string $title = 'Main dashboard';

    public function getWidgets(): array
    {
        if ($this->checkRole()) {
            return [
                TotalArticles::class,
                NewArticlesThisMonth::class,
                DialAServiceChart::class,
                OpportunitiesChart::class,
                SchoolReportChart::class
            ];
        }
        return [
            DefaultNoAccessMainDashboardWidget::class
        ];
    }

    public function getColumns(): int|string|array
    {
        return [
            'sm' => 1,
            'md' => 6,
            'xl' => 12,
        ];
    }

    private function checkRole()
    {
        return auth()->user()->roles()->whereHas('permissions', function ($query) {
            $query->where('title', 'main_dashboard_access');
        })->exists();
    }
}
