<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
    public function mostrarlogin(): View
    {
        return view('login_david');
    }
}
