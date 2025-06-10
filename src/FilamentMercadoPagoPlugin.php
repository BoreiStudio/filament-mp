<?php

namespace BoreiStudio\FilamentMercadoPago;

use Filament\Contracts\Plugin;
use Filament\Panel;
use BoreiStudio\FilamentMercadoPago\Pages\MercadoPagoAccountPage;

class FilamentMercadoPagoPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-mercado-pago';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->pages([
                MercadoPagoAccountPage::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
