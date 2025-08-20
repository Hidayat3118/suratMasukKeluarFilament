<?php

namespace App\Filament\Resources\PengesahResource\Pages;

use App\Filament\Resources\PengesahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengesah extends EditRecord
{
    protected static string $resource = PengesahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
