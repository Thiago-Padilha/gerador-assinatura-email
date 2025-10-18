<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // Redireciona para a rota de login se a requisição não espera um JSON
        if (! $request->expectsJson()) {
            return route('login');
        }

        // Caso contrário, retorna null, o que é o comportamento padrão
        return null;
    }
}
