<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index(Request $request){
        return view('cadastro_funcionario');
    }

    public function salvar_funcionario(Request $request){
        $request ->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'cargo' => 'required',
        ]);

        try{
            $funcionario = new Funcionario();
            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->telefone = $request->telefone;
            $funcionario->cargo = $request->cargo;
            $funcionario->save();

            return response()->json(['message' => 'Funcionário cadastrado com sucesso!'], 200);
        }  catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function ver_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);
        $funcionario = Funcionario::find($request->id);
        if ($funcionario) {
            return response()->json(['funcionario' => $funcionario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Funcionário não encontrado', 'erro' => 's'], 200);
        }
    }

    public function alterar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|string|max:20',
            'cargo' => 'required|string|max:100',
        ]);

        try {
            $funcionario = Funcionario::find($request->id);
            if (!$funcionario) {
                return response()->json(['message' => 'Funcionário não encontrado', 'erro' => 's'], 200);
            }

            $funcionario->nome = $request->nome;
            $funcionario->email = $request->email;
            $funcionario->telefone = $request->telefone;
            $funcionario->cargo = $request->cargo;
            $funcionario->save();

            return response()->json(['message' => 'Funcionário atualizado com sucesso', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao atualizar funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }

    public function deletar_funcionario(Request $request){
        $request->validate([
            'id' => 'required|integer',
        ]);

        try {
            $funcionario = Funcionario::find($request->id);
            if (!$funcionario) {
                return response()->json(['message' => 'Funcionário não encontrado', 'erro' => 's'], 200);
            }

            $funcionario->delete();

            return response()->json(['message' => 'Funcionário deletado com sucesso', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar funcionário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }
    }
}
