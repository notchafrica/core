<?php

namespace Notch\Core;

use Notch\Core\Commands\CurrencyCleanup;
use Notch\Core\Commands\CurrencyHydrate;
use Notch\Core\Commands\CurrencySeed;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('core')
            ->hasConfigFile()
            ->hasMigration('create_currency_table')
            ->hasMigration('create_balance_table')
            ->hasCommand(CurrencyCleanup::class)
            ->hasCommand(CurrencyHydrate::class)
            ->hasCommand(CurrencySeed::class);
    }
}
