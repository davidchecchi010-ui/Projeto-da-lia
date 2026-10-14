<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiaController extends Controller
{
    public function index(Request $request){
        return view('fale_com_a_lia');
    }
}
