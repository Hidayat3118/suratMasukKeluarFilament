<?php

namespace App\Filament\Resources\UnitPenerbitResource\Pages;

use App\Filament\Resources\UnitPenerbitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUnitPenerbit extends EditRecord
{
    protected static string $resource = UnitPenerbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
