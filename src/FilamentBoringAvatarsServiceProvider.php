<?php

namespace Cmdinglasan\FilamentBoringAvatars;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentBoringAvatarsServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-boring-avatars')
            ->hasConfigFile();
    }
}
