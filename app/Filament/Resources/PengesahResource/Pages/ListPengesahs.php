<?php

namespace App\Filament\Resources\PengesahResource\Pages;

use App\Filament\Resources\PengesahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPengesahs extends ListRecords
{
    protected static string $resource = PengesahResource::class;

    protected function getHeaderActions(): array
    {
        return [
              Actions\CreateAction::make()->label('Tambah Surat')
                ->icon('heroicon-o-plus')
                ->color('primary'),
        ];
    }
}
