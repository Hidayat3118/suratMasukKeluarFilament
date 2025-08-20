<?php

namespace App\Filament\Resources\UnitPenerbitResource\Pages;

use App\Filament\Resources\UnitPenerbitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnitPenerbits extends ListRecords
{
    protected static string $resource = UnitPenerbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
              Actions\CreateAction::make()->label('Tambah Unit Penerbit')
                ->icon('heroicon-o-plus')
                ->color('primary'),
        ];
    }

    
}
