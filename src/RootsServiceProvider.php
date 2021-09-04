<?php

declare(strict_types=1);

namespace Soho\Roots;

use Illuminate\Support\ServiceProvider;

use Soho\Roots\Console\InstallRootsCommand;
use Soho\Roots\Console\CrudCommand;
use Soho\Roots\Console\CrudControllerCommand;
use Soho\Roots\Console\CrudModelCommand;
use Soho\Roots\Console\CrudMigrationCommand;
use Soho\Roots\Console\CrudViewCommand;
use Soho\Roots\Console\CrudLangCommand;
use Soho\Roots\Console\CrudApiCommand;
use Soho\Roots\Console\CrudApiControllerCommand;

class RootsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('roots.php'),
        ], 'config');
        
    }

    public function boot()
    {

        // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->commands([
                CrudCommand::class,
                CrudControllerCommand::class,
                CrudModelCommand::class,
                CrudMigrationCommand::class,
                CrudViewCommand::class,
                CrudLangCommand::class,
                CrudApiCommand::class,
                CrudApiControllerCommand::class,
                InstallRootsCommand::class,
            ]);
        }
    }
}
