<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Carbon\CarbonImmutable;
use Illuminate\View\View;

class CardapioController extends Controller
{
    public function index(): View
    {
        $inicioSemanaAtual = CarbonImmutable::now()->startOfWeek();
        $fimSemanaAtual = $inicioSemanaAtual->endOfWeek();
        $inicioProximaSemana = $inicioSemanaAtual->addWeek();
        $fimProximaSemana = $inicioProximaSemana->endOfWeek();

        $cardapiosDestaSemana = Cardapio::query()
            ->with('produtos')
            ->whereBetween('data', [$inicioSemanaAtual, $fimSemanaAtual])
            ->orderBy('data')
            ->get();

        $cardapiosProximaSemana = Cardapio::query()
            ->with('produtos')
            ->whereBetween('data', [$inicioProximaSemana, $fimProximaSemana])
            ->orderBy('data')
            ->get();

        return view('cardapios.index', compact(
            'inicioSemanaAtual',
            'fimSemanaAtual',
            'inicioProximaSemana',
            'fimProximaSemana',
            'cardapiosDestaSemana',
            'cardapiosProximaSemana',
        ));
    }
}
