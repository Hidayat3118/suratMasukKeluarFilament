<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Surat;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SuratResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SuratResource\RelationManagers;
use Filament\Tables\Actions\Action;

class SuratResource extends Resource
{
    protected static ?string $model = Surat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralLabel = 'Surat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_surat')
                    ->label('Nomor Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pengirim_surat')
                    ->label('Pengirim Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('waktu_surat')
                    ->label('Waktu Surat')
                    ->required(),
                Forms\Components\Textarea::make('isi_surat')
                    ->label('Isi Surat')
                    ->required(),
                Forms\Components\TextInput::make('tempat_surat')
                    ->label('Tempat Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('perihal_surat')
                    ->label('Perihal Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lampiran_surat')
                    ->label('Lampiran Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('penerima_surat')
                    ->label('Penerima Surat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis_surat')
                    ->label('Jenis Surat')
                    ->options([
                        'masuk' => 'Masuk',
                        'keluar' => 'Keluar',
                    ])
                    ->required(),
                Forms\Components\Select::make('unit_penerbit_id')
                    ->relationship('unitPenerbit', 'nama_unit')
                    ->label('Unit Penerbit')
                    ->required(),
                Forms\Components\Select::make('pengesah_id')
                    ->relationship('pengesah', 'nama_pengesah')
                    ->label('Nama Pengesah Surat')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_surat')
                    ->label('Nomor Surat')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('pengirim_surat')
                    ->label('Pengirim Surat')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('waktu_surat')
                    ->label('Waktu Surat')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('penerima_surat')
                    ->label('Penerima Surat'),

                TextColumn::make('tempat_surat')
                    ->label('Tempat Surat'),

                TextColumn::make('penerima_surat')
                    ->label('Penerima Surat'),

                TextColumn::make('lampiran_surat')
                    ->label('Lampiran Surat'),

                TextColumn::make('penerima_surat')
                    ->label('Penerima Surat'),


                TextColumn::make('jenis_surat')
                    ->label('Jenis Surat')
                    ->sortable(),

                TextColumn::make('pengesah.nama_pengesah')
                    ->label('Nama Pengesah Surat')
                    
            ])
            ->filters([
                SelectFilter::make('jenis_surat')
                    ->label('Jenis Surat')
                    ->options([
                        'masuk' => 'Surat Masuk',
                        'keluar' => 'Surat Keluar',
                    ])
                    ->attribute('jenis_surat'), // kolom di tabel
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('Cetak')
                    ->url(fn($record) => route('surat.cetak', $record))
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-printer')
                    ->color('info'),
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
            'index' => Pages\ListSurats::route('/'),
            'create' => Pages\CreateSurat::route('/create'),
            'edit' => Pages\EditSurat::route('/{record}/edit'),
        ];
    }
}
