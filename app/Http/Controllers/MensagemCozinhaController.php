<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MensagemCozinha;



class MensagemCozinhaController extends Controller
{
    public function Salva_mensagemCozinha(Request $request)
    {
        try {
            $mensagem = new MensagemCozinha();
            $mensagem->nome = $request->input('nome');
            $mensagem->email = $request->input('email');
            $mensagem->assunto = $request->input('assunto');
            $mensagem->mensagem = $request->input('mensagem');
            $mensagem->status = $request->input('status');
            $mensagem->save();

            return response()->json(['message' => 'Mensagem enviada com sucesso!'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao enviar mensagem', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }

    }

    public function Alterar_mensagemCozinha(Request $request)
    {
        $mensagem = MensagemCozinha::find($request->input('id'));
        if (!$mensagem) {
            return response()->json(['message' => 'Mensagem não encontrada!'], 404);
        }
        try {
            $mensagem->nome = $request->input('nome');
            $mensagem->email = $request->input('email');
            $mensagem->assunto = $request->input('assunto');
            $mensagem->mensagem = $request->input('mensagem');
            $mensagem->status = $request->input('status');
            $mensagem->save();

            return response()->json(['message' => 'Mensagem alterada com sucesso!'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar mensagem', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
    public function Deletear_mensagemCozinha(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {

            $MensagemCozinha = MensagemCozinha::find($request->input('id'));
            $MensagemCozinha->delete();

            return response()->json(['message' => 'Mensagem deletada com sucesso!'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar mensagem', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
