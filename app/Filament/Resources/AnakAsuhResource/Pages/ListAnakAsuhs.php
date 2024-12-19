<?php

namespace App\Filament\Resources\AnakAsuhResource\Pages;

use App\Filament\Resources\AnakAsuhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnakAsuhs extends ListRecords
{
    protected static string $resource = AnakAsuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
