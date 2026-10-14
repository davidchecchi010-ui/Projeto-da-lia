<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index(Request $request){
        return view('sobre_o_refeitorio');
    }
}
