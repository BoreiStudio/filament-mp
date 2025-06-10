<?php

namespace BoreiStudio\FilamentMercadoPago;

use Illuminate\Support\ServiceProvider;
use BoreiStudio\FilamentMercadoPago\Services\MercadoPagoService;

class FilamentMercadoPagoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MercadoPagoService::class, function ($app) {
            return new MercadoPagoService();
        });

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