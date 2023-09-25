<?php

namespace App\Filament\Resources\PenagihanResource\Pages;

use App\Filament\Resources\PenagihanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePenagihan extends CreateRecord
{
    protected static string $resource = PenagihanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // $data['initial_meter'] = strtoupper($data['initial_meter']);
        // $data['previous_meter'] = strtoupper($data['previous_meter']);
        // $data['updated_meter'] = strtoupper($data['updated_meter']);
        // $data['total_payment'] = strtoupper($data['total_payment']);
        


        return $data;
    }
}
