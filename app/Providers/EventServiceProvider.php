<?php

namespace App\Providers;

use App\Events\InvoiceItemCreated;
// use Illuminate\Support\ServiceProvider;
use   Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        InvoiceItemCreated::class => [
            'App\Listeners\HandleInvoiceItemCreated',
        ],
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
    }
}
