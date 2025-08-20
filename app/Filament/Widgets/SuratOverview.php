<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SuratOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Surat Masuk', \App\Models\Surat::where('jenis_surat', 'masuk')->count())
                ->description('Total surat masuk')
                ->descriptionIcon('heroicon-m-arrow-down-tray')
                ->color('success'),

            Stat::make('Surat Keluar', \App\Models\Surat::where('jenis_surat', 'keluar')->count())
                ->description('Total surat keluar')
                ->descriptionIcon('heroicon-m-arrow-up-tray')
                ->color('danger'),

            Stat::make('Jumlah Penerbit', \App\Models\UnitPenerbit::count())
                ->description('Total penerbit')
                ->descriptionIcon('heroicon-m-building-office')
                ->color('info'),

            Stat::make('Jumlah Pengesah', \App\Models\Pengesah::count())
                ->description('Total pengesah')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('warning'),
        ];
    }
}
