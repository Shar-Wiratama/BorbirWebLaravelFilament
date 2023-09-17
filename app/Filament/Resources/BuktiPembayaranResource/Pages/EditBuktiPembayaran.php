<?php

namespace App\Filament\Resources\BuktiPembayaranResource\Pages;

use App\Filament\Resources\BuktiPembayaranResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBuktiPembayaran extends EditRecord
{
    protected static string $resource = BuktiPembayaranResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
