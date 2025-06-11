<?php

namespace BoreiStudio\FilamentMercadoPago;

use BoreiStudio\FilamentMercadoPago\Pages\MercadoPagoSettings;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentMercadoPagoPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        return filament(app(static::class)->getId());
    }

    public function getId(): string
    {
        return 'filament-mercado-pago';
    }

    public function register(Panel $panel): void
    {
        $panel->pages([
            MercadoPagoSettings::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        // Si necesitás hacer algo cuando se carga el panel.
    }
}
