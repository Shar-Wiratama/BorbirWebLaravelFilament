<?php

namespace App\Filament\Resources\PengumumanResource\Pages;

use App\Filament\Resources\PengumumanResource;
use Filament\Resources\Pages\Page;

class ViewPengumuman extends Page
{
    protected static string $resource = PengumumanResource::class;

    protected static string $view = 'filament.resources.pengumuman-resource.pages.view-pengumuman';
}
