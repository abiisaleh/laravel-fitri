<?php

namespace App\Filament\Resources\PemasukanResource\Pages;

use App\Filament\Resources\PemasukanResource;
use App\Models\pemasukan;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Blade;

class ManagePemasukans extends ManageRecords
{
    protected static string $resource = PemasukanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Cetak Laporan bulan ini')
                ->icon('heroicon-s-printer')
                ->color('danger')
                ->action(function () {
                    $records = pemasukan::whereYear('tanggal', now()->year)->whereMonth('tanggal',  now()->month)->get();

                    return response()->streamDownload(function () use ($records) {
                        echo Pdf::loadHtml(
                            Blade::render('report', [
                                'title' => 'Laporan Pemasukan',
                                'subtitle' => 'Pemasukan bulan ' . now()->format('F'),
                                'records' => $records,
                                'total' => $records->sum('nominal'),
                                'cols' => [
                                    'tanggal' => 'tanggal',
                                    'donatur' => 'donatur',
                                    'jenis donasi' => 'jenis_donasi',
                                    'keterangan' => 'keterangan',
                                    'nominal' => 'nominal',
                                ]
                            ])
                        )->setPaper('a4', 'potrait')->stream();
                    }, 'Laporan penjualan ' . now() . '.pdf');
                }),

            Actions\CreateAction::make(),
        ];
    }
}
