<?php

namespace App\Http\Controllers;

use App\Models\MensagemCozinha;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function conversar(): View
    {
        return view('falar_com_a_cozinheira');
    }

    public function enviar(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:255'],
            'assunto' => ['required', 'in:outra_opcao,troca_alimento,sugestao,outro'],
            'mensagem' => ['required', 'string', 'max:2000'],
        ]);

        MensagemCozinha::create($dados);

        return to_route('contato.cozinha')->with('status', 'Mensagem enviada para as cozinheiras!');
    }

    public function index(Request $request)
    {
        return view('contato_cozinha');
    }
}
