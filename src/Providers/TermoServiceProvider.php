<?php

namespace Intuix\Termo\Providers;

use Illuminate\Support\ServiceProvider;

class TermoServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'termo');
        $this->publishes([__DIR__ . '/../../config/cw_termo.php' => config_path('cw_termo.php')], 'config');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
    }

    public function register()
    {

    }
}
