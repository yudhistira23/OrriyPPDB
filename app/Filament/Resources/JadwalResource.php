<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationLabel = 'Jadwal';

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function getPluralLabel(): string
    {
        return 'Manajemen Jadwal';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\TextInput::make('kegiatan')->columnSpan(2)->required(),
                Components\TextInput::make('lokasi')->required(),
                Components\TextInput::make('tanggal')->required(),
                Components\TextInput::make('waktu')->required(),
                Components\ColorPicker::make('catatan')->name('Warna Tag')->default('#000000')
                    ->regex('/^#([a-f0-9]{6}|[a-f0-9]{3})\b$/'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('kegiatan'),
                Columns\TextColumn::make('lokasi'),
                Columns\TextColumn::make('tanggal'),
                Columns\TextColumn::make('waktu'),
                Columns\TextColumn::make('catatan')->label('Warna Tag')->formatStateUsing(fn($state) => '<div style="width: 20px; height: 20px; background-color: ' . $state . ';"></div>')->html()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageJadwals::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
