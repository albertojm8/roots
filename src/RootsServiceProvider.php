<?php

declare(strict_types=1);

namespace Soho\Roots;

use Illuminate\Support\ServiceProvider;

use Soho\Roots\Console\{ScaffoldApiCommand, InstallRootsCommand};


class RootsServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
              __DIR__.'/../config/config.php' => config_path('roots.php'),
            ], 'config');
        
        }
        // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->commands([
                ScaffoldApi::class,
                InstallRoots::class
            ]);
        }
    }
}
