<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Registra as rotas para broadcasting
        Broadcast::routes();

        // Carrega os canais de broadcasting definidos em routes/channels.php
        require base_path('routes/channels.php');
    }
}
