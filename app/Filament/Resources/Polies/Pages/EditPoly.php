<?php

namespace App\Filament\Resources\Polies\Pages;

use App\Filament\Resources\Polies\PolyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPoly extends EditRecord
{
    protected static string $resource = PolyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
