<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

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
        $titulo = 'Crear Categoría';
        return view('modules.categorias.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $item = new Categoria();
            $item->user_id = Auth::user()->id;
            $item->nombre = $request->nombre;
            $item->save();
            return to_route('categorias')->with('success','Categoria Agregada');
        } catch (Exception $e) {
            return to_route('categorias')->with('error','No se pudo guardar' . $e->getMessage()) ;
        }
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
        $titulo = "Editar Categoría";
        $item = Categoria::find($id);
        return view('modules.categorias.edit', compact('item','titulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $item = Categoria::find($id);
            $item->nombre = $request->nombre;
            $item->save();
            return to_route('categorias')->with('success', 'Categoría Actualizada');
        } catch (Exception $e) {
            return to_route('categorias')->with('error', 'No se pudo actualizar' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = Categoria::find($id);
            $item->delete();
            return to_route('categorias')->with('success','Categoría Eliminada');
        } catch (Exception $e) {
            return to_route('categorias')->with('error', 'No se pudo eliminar' . $e->getMessage());
        }
    }
}
