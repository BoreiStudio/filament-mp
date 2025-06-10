<?php

namespace BoreiStudio\FilamentMercadoPago;

use Illuminate\Support\ServiceProvider;

class FilamentMercadoPagoPlugin extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            \BoreiStudio\FilamentMercadoPago\Console\InstallCommand::class,
        ]);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/filament-mercado-pago.php' => config_path('filament-mercado-pago.php'),
        ], 'filament-mercado-pago-config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'filament-mercado-pago-migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'filament-mercadopago');
    }
}