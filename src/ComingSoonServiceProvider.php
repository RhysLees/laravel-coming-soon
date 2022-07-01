<?php

namespace RhysLees\ComingSoon;

use Illuminate\Contracts\Http\Kernel;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RhysLees\ComingSoon\Commands\ComingSoonCommand;

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
