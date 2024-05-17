<?php

namespace App\Filament\Resources\MaterizoomResource\Pages;

use App\Filament\Resources\MaterizoomResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMaterizooms extends ManageRecords
{
    protected static string $resource = MaterizoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
