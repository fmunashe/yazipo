<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class AnnualArticleNumbersChart extends ChartWidget
{
    protected static ?string $heading = 'Annual Article Numbers';
    protected int|string|array $columnSpan = 12;
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $data = Trend::model(Article::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();
        $previousYear = Trend::model(Article::class)
            ->between(
                start: now()->subYear()->startOfYear(),
                end: now()->subYear()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => Carbon::now()->format('Y') . ' Articles',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#56174e',
                    'borderColor' => '#56174e',
                ],
                [
                    'label' => Carbon::now()->subYear()->format('Y') . ' Articles',
                    'data' => $previousYear->map(fn(TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#9BD0F5',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => Carbon::parse($value->date)->format('M')),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    public function getColumns(): int
    {
        return 1;
    }
}
