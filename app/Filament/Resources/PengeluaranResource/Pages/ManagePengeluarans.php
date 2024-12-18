<?php

namespace App\Filament\Resources\PengeluaranResource\Pages;

use App\Filament\Resources\PengeluaranResource;
use App\Models\pengeluaran;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Blade;

class ManagePengeluarans extends ManageRecords
{
    protected static string $resource = PengeluaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Cetak Laporan bulan ini')
                ->icon('heroicon-s-printer')
                ->color('danger')
                ->action(function () {
                    $records = pengeluaran::whereYear('tanggal', now()->year)->whereMonth('tanggal',  now()->month)->get();

                    return response()->streamDownload(function () use ($records) {
                        echo Pdf::loadHtml(
                            Blade::render('report', [
                                'title' => 'Laporan Pengeluaran',
                                'subtitle' => 'pengeluaran bulan ' . now()->format('F') . ' ' . now()->year,
                                'records' => $records,
                                'total' => $records->sum('nominal'),
                                'cols' => [
                                    'tanggal' => 'tanggal',
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
