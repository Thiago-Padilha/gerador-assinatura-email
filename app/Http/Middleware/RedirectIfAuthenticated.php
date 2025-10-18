<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Verifica se o usuário já está autenticado
        if (Auth::guard($guard)->check()) {
            // Redireciona para a rota definida no RouteServiceProvider
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
