<?php

namespace App\Http\Controllers;

use App\Models\Cardapio;
use Illuminate\Http\Request;    

class CardapioController extends Controller
{   

     public function salvar_cardapio(Request $request){
        $request->validate([
            'data' => 'required|string|date',
            'departamento' => 'required|string|max:255',
            'data_admissao' => 'required|string|date',
        ]);

        try{ 
            $cardapio = new Cardapio();
            $cardapio->data = $request->data;
            $cardapio->departamento = $request->departamento;
            $cardapio->data_admissao = $request->data_admissao;
            $cardapio->save();

            return response()->json(['message' => 'Cardápio cadastrado com sucesso!'], 200);
        }catch(\Throwable $th){
            return response()->json(['message' => 'Erro ao cadastrar cardápio', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);

        }

     }

     public function ver_cardapios(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $cardapio = Cardapio::find($request->id);
        if ($cardapio) {
            return response()->json(['cardapio' => $cardapio, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Cardápio não encontrado', 'erro' => 's'], 200);
        }
     }

     public function listar_cardapios(Request $request){
        $cardapios = Cardapio::all();
        return response()->json(['cardapios' => $cardapios, 'erro' => 'n'], 200);
     }

     public function alterar_caradapio(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'data' => 'required|string|date_format:Y-m-d',
            'departamento' => 'required|string|max:255',
            'data_admissão' => 'required|string|date_format:Y-m-d',
        ]);

        try {
            $cardapio = Cardapio::find($request->id);
            if (!$cardapio) {
                return response()->json(['message' => 'Cardápio não encontrado', 'erro' => 's'], 200);
            }
            $cardapio->data = $request->data;
            $cardapio->departamento = $request->departamento;
            $cardapio->data_admissão = $request->data_admissão;
            $cardapio->save();

            return response()->json(['message' => 'Cardápio alterado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar cardápio', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
     }

     public function delete_cardapio(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $cardapio = Cardapio::find($request->id);
            if (!$cardapio) {
                return response()->json(['message' => 'Cardápio não encontrado', 'erro' => 's'], 200);
            }
            $cardapio->delete();

            return response()->json(['message' => 'Cardápio deletado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar cardápio', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
     }  

    
}
