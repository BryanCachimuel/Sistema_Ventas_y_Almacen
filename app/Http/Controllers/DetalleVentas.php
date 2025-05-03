<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class DetalleVentas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = "Detalle de Ventas";
        $items = Venta::select(
            'ventas.*',
            'users.name as nombre_usuario'
        )
        ->join('users','ventas.user_id', '=', 'users.id')
        ->orderBy('ventas.created_at', 'desc')
        ->get();
        return view('modules.detalles_ventas.index', compact('titulo','items'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
