<?php

namespace App\Filament\Resources\AlteregoResource\Pages;

use App\Filament\Resources\AlteregoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlterego extends EditRecord
{
    protected static string $resource = AlteregoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
