<?php

namespace App\Filament\Resources\AlteregoResource\Pages;

use App\Filament\Resources\AlteregoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlteregos extends ListRecords
{
    protected static string $resource = AlteregoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
