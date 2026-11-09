<?php

namespace App\Http\Middleware;

use App\Models\usuarioToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admins;
use Carbon\Carbon;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
   
   public function handle(Request $request, Closure $next): Response
        {
           
            if($request->has('token') && $request->has('usuario_id')){
               
             $token = usuarioToken::Where('usuario_id', $request->usuario_id)
            ->where('token', $request->token)
            ->where('valido_ate', '>', Carbon::now())
            ->first();
                if($token){

                    $admin = Admins::where('usuario_id','=', $request->usuario_id)->first();
                    if($admin){
                    return $next($request);
                    }else{
                        return response()->json(['message' => 'Usuario não é admin', 'erro' => 's'],200);
                    }
                }
                return response()->json(['message' => 'Token invalido ou expirado', 'erro' => 's'],200 );

        }else{
            return response()->json(['message' => 'Token não fornecido', 'erro' => 's'],200);
         }

           
        }
}