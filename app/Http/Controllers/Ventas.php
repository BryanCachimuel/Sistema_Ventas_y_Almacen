<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Ventas extends Controller
{
    public function index(){
        $titulo = "Venta de Productos";
        $items = Producto::all();
        return view('modules.ventas.index', compact('titulo','items'));
    }

    public function agregar_carrito($id_producto)
    {
        $titulo = 'Ventas';
        $item = Producto::find($id_producto);

        // obtener los productos ya almacenados
        $items_carrito = Session::get('items_carrito', []);

        // agregar el nuevo producto
        $items_carrito [] = [
            'id' => $item->id,
            'nombre' => $item->nombre
        ];

        // se crea una sesión
        Session::put('items_carrito', $items_carrito);

        $items = Producto::all();
        return view('modules.ventas.index', compact('titulo','items'));
    }
}
