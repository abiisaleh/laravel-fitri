<?php

namespace App\Filament\Resources\AnakAsuhResource\Pages;

use App\Filament\Resources\AnakAsuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnakAsuh extends EditRecord
{
    protected static string $resource = AnakAsuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
