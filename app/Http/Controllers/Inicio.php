<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    public function index()
    {
        return view('modules.inicio.index');
    }
}
