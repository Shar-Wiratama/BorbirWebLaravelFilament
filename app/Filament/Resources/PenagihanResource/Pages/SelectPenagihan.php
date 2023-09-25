<?php

namespace App\Filament\Resources\PenagihanResource\Pages;

use App\Filament\Resources\PenagihanResource;
use Filament\Resources\Pages\Page;

class SelectPenagihan extends Page
{
    protected static string $resource = PenagihanResource::class;

    protected static string $view = 'filament.resources.penagihan-resource.pages.select-penagihan';
}
