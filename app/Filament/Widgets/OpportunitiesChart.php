<?php

namespace App\Filament\Widgets;

use App\Models\Opportunity;
use Filament\Widgets\ChartWidget;

class OpportunitiesChart extends ChartWidget
{

    protected int|string|array $columnSpan = 4;
    protected static ?string $maxHeight = '300px';
    protected static ?string $heading = 'Opportunities';

    protected function getData(): array
    {
        $results = Opportunity::query()
            ->selectRaw('status, count(*) as value')
            ->groupBy(['status'])
            ->get();

        $labels = $results->pluck('status')->map(function ($status) {
            return $status == 1 ? 'Open' : 'Closed';
        })->toArray();
        $data = $results->pluck('value')->toArray();
        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Opportunities',
                    'data' => $data,
                    'backgroundColor' => ['#f05024', '#21c55e', '#FFCE56', '#36A2EB', '#21c55e', '#FFCE56', '#9966FF', '#9966FF', '#FF9F40', '#CEDF9F', '#FF6384', '#36A2EB', '#FFCE56', '#9966FF', '#A1D6B2', '#51829B', '#4BC0C0', '#FF6384', '#36A2EB', '#FFCE56', '#9966FF', '#FF9F40', '#CEDF9F', '#F1F3C2', '#E8B86D'],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
