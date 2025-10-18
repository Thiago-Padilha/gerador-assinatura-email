<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssinaturaController extends Controller
{
    /**
     * Gera uma assinatura e retorna a view correspondente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function gerarAssinatura(Request $request)
    {
        // Você pode validar a requisição se necessário
        // $request->validate([
        //     'campo' => 'required|string|max:255',
        // ]);

        // Retorna a view 'assinatura' com os dados da requisição
        return view('assinatura', ['request' => $request]);
    }
}
