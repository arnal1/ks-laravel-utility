<?php

namespace Kastana\KsLaravelUtility;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kastana\KsLaravelUtility\Commands\KsLaravelUtilityCommand;

class KsLaravelUtilityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ks-laravel-utility')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ks-laravel-utility_table')
            ->hasCommand(KsLaravelUtilityCommand::class);
    }
}
