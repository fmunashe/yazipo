<?php

namespace App\Filament\Widgets;

use App\Models\Organisation;
use Filament\Widgets\ChartWidget;

class ZimChart extends ChartWidget
{
    protected static ?string $heading = 'Service Providers By Province';
    protected int|string|array $columnSpan = 6;
    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $results = Organisation::query()
            ->join('provinces', 'provinces.id', '=', 'organisations.province_id')
            ->selectRaw('provinces.name as province, count(organisations.id) as value')
            ->groupBy(['provinces.name'])
            ->orderByDesc('value')
            ->get();
        $labels = $results->pluck('province')->toArray();
        $data = $results->pluck('value')->toArray();
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Service Providers By Province',
                    'data' => $data,
                    'backgroundColor' => ['#A1D6B2','#51829B', '#4BC0C0', '#FF6384', '#36A2EB', '#FFCE56', '#9966FF', '#FF9F40', '#CEDF9F', '#F1F3C2', '#E8B86D'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    public function getColumns(): int
    {
        return 1;
    }
}
