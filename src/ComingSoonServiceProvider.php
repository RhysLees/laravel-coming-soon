<?php

namespace RhysLees\ComingSoon;

use RhysLees\ComingSoon\Commands\ComingSoonCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComingSoonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-coming-soon')
            ->hasConfigFile()
            ->hasViews('laravel-coming-soon')
            ->hasRoutes('web')
            ->hasCommand(ComingSoonCommand::class);
    }
}
