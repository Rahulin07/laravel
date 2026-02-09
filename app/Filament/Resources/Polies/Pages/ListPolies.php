<?php

namespace App\Filament\Resources\Polies\Pages;

use App\Filament\Resources\Polies\PolyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPolies extends ListRecords
{
    protected static string $resource = PolyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
