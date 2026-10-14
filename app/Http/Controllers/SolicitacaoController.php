<?php

namespace App\Http\Controllers;

use App\Models\SolicitacaoTroca;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SolicitacaoController extends Controller
{
    public function index(): View
    {
        return view('solicitacao_de_troca');
    }

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:120'],
            'ano' => ['required', 'string', 'max:30'],
            'senai' => ['required', 'string', 'max:120'],
            'mistura_atual' => ['required', 'string', 'max:120'],
            'mistura_solicitada' => ['required', 'string', 'max:120', 'different:mistura_atual'],
        ]);

        SolicitacaoTroca::create($dados);

        return to_route('solicitacao_de_troca')->with('status', 'Dados enviados para a equipe do SESI.');
    }
}
