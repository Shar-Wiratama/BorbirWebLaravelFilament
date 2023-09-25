<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;

class TotalAirIndividu extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Penggunaan Air Bulanan Anggota',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->hasRole('anggota');
    }
}
