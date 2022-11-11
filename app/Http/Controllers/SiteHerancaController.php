<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteHerancaController extends Controller
{
    public function home()
    {
        return view('heranca.home');
    }

    public function portforlio()
    {
        return view('heranca.portforlio');
    }

    public function sobre()
    {
        return view('heranca.sobre');
    }

    public function contato()
    {
        return view('heranca.contato');
    }

}
