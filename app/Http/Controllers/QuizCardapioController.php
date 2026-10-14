<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizCardapioController extends Controller
{
    public function index(Request $request){

        return view('quiz_do_cardapio');
    }
}
