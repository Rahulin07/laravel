<?php

namespace App\Filament\Resources\Doctors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DoctorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('nip')
                    ->default(null),
                TextInput::make('sip')
                    ->default(null),
                TextInput::make('category')
                    ->default(null),
                TextInput::make('poli')
                    ->default(null),
            ]);
    }
}
