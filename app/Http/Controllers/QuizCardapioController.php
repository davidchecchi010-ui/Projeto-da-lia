<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizCardapioController extends Controller
{
    public function index(Request $request){

        return view('quiz_do_cardapio');
    }

    public function salvar_resposta(Request $request){
        $request ->validate([
            'resposta' => 'required',
        ]);

        try{
            $quiz = new QuizCardapio();
            $quiz->resposta = $request->resposta;
            $quiz->save();

            return response()->json(['message' => 'Resposta cadastrada com sucesso!'], 200);
        }  catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar resposta', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_resposta(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $quiz = QuizCardapio::find($request->id);
        if ($quiz) {
            $quiz->delete();
            return response()->json(['message' => 'Resposta deletada com sucesso', 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Resposta não encontrada', 'erro' => 's'], 200);
        }
    }

    public function alterar_resposta(Request $request){
        $request ->validate([
            'id' => 'required|integer',
            'resposta' => 'required|string|max:255',
        ]);
        $quiz = QuizCardapio::find($request->id);
        if ($quiz) {
            $quiz->resposta = $request->resposta;
            $quiz->save();
            return response()->json(['message' => 'Resposta alterada com sucesso', 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Resposta não encontrada', 'erro' => 's'], 200);
        }
    }
}
