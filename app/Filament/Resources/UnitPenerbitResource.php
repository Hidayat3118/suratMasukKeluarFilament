<?php

namespace App\Filament\Resources;

use Dom\Text;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\UnitPenerbit;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UnitPenerbitResource\Pages;
use App\Filament\Resources\UnitPenerbitResource\RelationManagers;

class UnitPenerbitResource extends Resource
{
    protected static ?string $model = UnitPenerbit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralLabel = 'Unit Penerbit';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_unit')
                    ->label('Nama Unit')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_unit')
                    ->label('Nama Unit')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUnitPenerbits::route('/'),
            'create' => Pages\CreateUnitPenerbit::route('/create'),
            'edit' => Pages\EditUnitPenerbit::route('/{record}/edit'),
        ];
    }
}
