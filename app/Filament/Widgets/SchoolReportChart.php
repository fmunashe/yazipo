<?php

namespace App\Filament\Widgets;

use App\Models\Opportunity;
use App\Models\SchoolReport;
use Filament\Widgets\ChartWidget;

class SchoolReportChart extends ChartWidget
{

    protected int|string|array $columnSpan = 4;
    protected static ?string $maxHeight = '300px';
    protected static ?string $heading = 'School Report';

    protected function getData(): array
    {
        $results = SchoolReport::query()
            ->selectRaw('notification_type, count(*) as value')
            ->groupBy(['notification_type'])
            ->get();

        $labels = $results->pluck('notification_type')->toArray();
        $data = $results->pluck('value')->toArray();
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'School Report',
                    'data' => $data,
                    'backgroundColor' => ['#21c55e','#f05024', '#FFCE56', '#36A2EB', '#21c55e', '#FFCE56', '#9966FF', '#9966FF', '#FF9F40', '#CEDF9F', '#FF6384', '#36A2EB', '#FFCE56', '#9966FF', '#A1D6B2', '#51829B', '#4BC0C0', '#FF6384', '#36A2EB', '#FFCE56', '#9966FF', '#FF9F40', '#CEDF9F', '#F1F3C2', '#E8B86D'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
