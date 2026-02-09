<?php

namespace App\Filament\Resources\Polies;

use App\Filament\Resources\Polies\Pages\CreatePoly;
use App\Filament\Resources\Polies\Pages\EditPoly;
use App\Filament\Resources\Polies\Pages\ListPolies;
use App\Filament\Resources\Polies\Schemas\PolyForm;
use App\Filament\Resources\Polies\Tables\PoliesTable;
use App\Models\Poly;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PolyResource extends Resource
{
    protected static ?string $model = Poly::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'poly';

    public static function form(Schema $schema): Schema
    {
        return PolyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PoliesTable::configure($table);
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
            'index' => ListPolies::route('/'),
            'create' => CreatePoly::route('/create'),
            'edit' => EditPoly::route('/{record}/edit'),
        ];
    }
}
