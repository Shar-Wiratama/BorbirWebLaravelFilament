<?php

namespace App\Filament\Resources\PenagihanResource\Pages;

use App\Filament\Resources\PenagihanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenagihans extends ListRecords
{
    protected static string $resource = PenagihanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
