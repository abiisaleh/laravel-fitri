<?php

namespace App\Filament\Widgets;

use App\Models\pemasukan;
use App\Models\pengeluaran;
use App\Models\santri;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Saldo', 'Rp. ' . number_format(pemasukan::sum('nominal') - pengeluaran::sum('nominal'))),
            Stat::make('Pemasukan', 'Rp. ' . number_format(pemasukan::sum('nominal'))),
            Stat::make('Pengeluaran', 'Rp. ' . number_format(pengeluaran::sum('nominal'))),
        ];
    }
}
