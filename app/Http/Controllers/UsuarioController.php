<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        return view('cadastro_usuario');
    }

    public function salvar_usuario(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'senha' => 'required|string|min:8',
            'cpf' => 'required|string|max:14|',
            'data_nascimento' => 'required|date'
        ]);

        try {

            $usuario = new Usuario();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = Hash::make($request->senha);
            $usuario->cpf = $request->cpf;
            $usuario->data_nascimento = $request->data_nascimento;
            $usuario->save();

            return response()->json(['message' => 'Usuário cadastrado com sucesso', 'erro' => 'n'], 200);


        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);

        }
    }

    public function ver_usuario(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $usuario = Usuario::find($request->id);
        if ($usuario) {
            return response()->json(['usuario' => $usuario, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Usuário não encontrado', 'erro' => 's'], 200);
        }
    }

    public function listar_usuarios(Request $request)
    {
        $usuarios = Usuario::all();
        return response()->json(['usuarios' => $usuarios, 'erro' => 'n'], 200);
    }

    public function listar_usuarios_simples(Request $request)
    {
        $usuarios = Usuario::select('nome', 'email')->get();
        return response()->json(['usuarios' => $usuarios, 'erro' => 'n'], 200);
    }



    public function alterar_usuario(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'senha' => 'required|string|min:8',
            'cpf' => 'required|string|max:14|',
            'data_nascimento' => 'required|date'
        ]);

        try {

            $usuario = Usuario::find($request->id);

            if($usuario->cpf != $request->cpf){
                $usuario_cpf_igual = Usuario ::where('cpf', $request->cpf)->first();
                if($usuario_cpf_igual){
                    return response()->json(['message' => 'CPF já cadastrado', 'erro' => 's'], 200);

                }
            }


            if($usuario->email != $request->email){
                $usuario_email_igual = Usuario ::where('email', $request->email)->first();
                if($usuario_email_igual){
                    return response()->json(['message' => 'Email já cadastrado', 'erro' => 's'], 200);
                    
                }
            }
            

            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = Hash::make($request->senha);
            $usuario->cpf = $request->cpf;
            $usuario->data_nascimento = $request->data_nascimento;
            $usuario->save();

            return response()->json(['message' => 'Usuário alterado com sucesso', 'erro' => 'n'], 200);


        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar usuário', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);

        }
    }

        public function deletar_usuario(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:usuario,id',
        ]);

        try {

            $usuario = Usuario::find($request->id);
            $usuario->delete();
            return response()->json(['message' => 'Usuário deletado com sucesso', 'erro' => 'n'], 200);
        }catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar usuário', 'erro' => $th->getMessage()], 200);
        }


        }
           








}
