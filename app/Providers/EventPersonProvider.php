<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EventPersonProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
           SendEmailVerificationNotification::class,
        ],
         '\App\Events\PersonaSaved' => [ //Evento
        '\App\Listeners\OptimizePersonaImage' //Listener
        ]
    ];
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
