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
    }

    public function boot()
    {
        //
    }
} 