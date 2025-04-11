<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class Categorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = "Administrar Categorías";
        $items = Categoria::all();
        return view('modules.categorias.index', compact('titulo','items'));
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
        $titulo = 'Eliminar Categoría';
        $item = Categoria::find($id);
        return view('modules.categorias.show', compact( 'titulo','item'));
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
        $item = Categoria::find($id);
        $item->delete();
        return to_route('categorias');
    }
}
