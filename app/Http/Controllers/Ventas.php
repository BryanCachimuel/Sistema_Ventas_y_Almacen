<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class Ventas extends Controller
{
    public function index(){
        $titulo = "Venta de Productos";
        $items = Producto::all();
        return view('modules.ventas.index', compact('titulo','items'));
    }
}
