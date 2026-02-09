<?php

namespace App\Filament\Resources\Polies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PolyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('poli')
                    ->required(),
            ]);
    }
}
