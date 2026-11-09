<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\usuarioToken;

class CadastroUsuarioController extends Controller
{
    public function index(): View
    {
        return view('cadastro_usuario');
    }
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);
        $usuario = Usuario::where('email', $request->email)->first();
        if($usuario){
            if(hash::check($request->senha, $usuario->senha)){
                $usuario_token = new usuarioToken();
                $usuario_token->usuario_id = $usuario->id;
                $usuario_token->token = Hash::make($usuario->id . $usuario->email . now());
                $usuario_token->valido_ate = now()->addHours(7);
                $usuario_token->save();
                return response()->json(['message' => 'Login realizado com sucesso', 'erro' => 'n' , 'token' => $usuario_token->token, 'erro' => 'n'], 200);

    }else{
        return response()->json(['message' => 'Usuario ou senha incorreto', 'erro' => 's'], 200);
    }
    }else{
        return response()->json(['message' => 'Email não encontrado', 'erro' => 's'], 200);
    }
    }
    
    public function logout(Request $request){
        $request->validate([
            'usuario_id' => 'required',
            'token' => 'required'
        ]);
        $usuario = Usuario::where('id', $request->usuario_id)->first();
        if($usuario){
            $usuario_token = usuarioToken::where('usuario_id', $usuario->id)->where('token', $request->token)->first();
            if($usuario_token){
                $usuario_token->delete();
                return response()->json(['message' => 'Logout realizado com sucesso', 'erro' => 'n'], 200);
            }else{
                return response()->json(['message' => 'Token inválido', 'erro' => 's'], 200);
            }
    }
    }
}