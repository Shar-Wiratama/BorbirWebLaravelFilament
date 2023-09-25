<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\UserResource;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            // Filament::registerTheme(
            //     mix('css/filament.css'),
            // );

            // if(Auth::check() && Auth::user()->hasRole('admin')){
            //     Filament::registerUserMenuItems([
            //         UserMenuItem::make()
            //         ->label('Settings')
            //         ->url(UserResource::getUrl())
                    
            //     ]);
            // }
            Filament::registerUserMenuItems([
                UserMenuItem::make()
                    ->label('Settings')
                    ->icon('heroicon-s-cog'),
            ]);
            
        });
    }
}
