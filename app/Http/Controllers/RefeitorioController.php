<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class RefeitorioController extends Controller
{
    public function index(Request $request)
    {
        return view('refeitorio_principal');
    }

    public function trocaAlmoco(): View
    {
        return view('troca_almoco');
    }
}
