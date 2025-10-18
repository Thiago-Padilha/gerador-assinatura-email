<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // Registre as políticas de autorização
        $this->registerPolicies();

        // Você pode definir Gates ou outras lógicas de autorização aqui
        // Gate::define('view-posts', function ($user) {
        //     return $user->hasPermission('view-posts');
        // });
    }
}
