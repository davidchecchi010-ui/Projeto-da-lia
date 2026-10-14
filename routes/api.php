<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FuncionarioController;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/usuario_cadastro', [UsuarioController::class, 'salvar_usuario']);
Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario']);
Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios']);
Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples'])->name('usuario.listar_simples');
Route::put('/alterar_usuarios', [UsuarioController::class, 'alterar_usuario']);
Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario']);

Route ::post('salvar_funcionario', [FuncionarioController::class, 'salvar_funcionario']);
Route::get('ver_funcionario', [FuncionarioController::class,'']);
Route::get('listar_funcionarios', [FuncionarioController::class, 'listar_funcionarios']);
Route::get('alterar_usuario', [FuncionarioController::class,'']);


