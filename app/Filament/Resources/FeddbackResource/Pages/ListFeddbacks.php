<?php

namespace App\Filament\Resources\FeddbackResource\Pages;

use App\Filament\Resources\FeddbackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeddbacks extends ListRecords
{
    protected static string $resource = FeddbackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
