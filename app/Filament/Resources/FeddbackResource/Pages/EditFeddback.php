<?php

namespace App\Filament\Resources\FeddbackResource\Pages;

use App\Filament\Resources\FeddbackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeddback extends EditRecord
{
    protected static string $resource = FeddbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
