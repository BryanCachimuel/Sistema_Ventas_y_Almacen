<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductoRequest;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Presentacione;
use Illuminate\Http\Request;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('producto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        /*TODO: se optienen todas las marcas registradas para poderlas filtrar en un input de marcas dentro del 
        formulario para crear productos 
        se agrega un join para poder obtener solo las marcas activas
        */
        $marcas = Marca::join('caracteristicas as c',
                              'marcas.caracteristica_id',
                              '=',
                              'c.id')
                              ->select('marcas.id as id','c.nombre as nombre')
                              ->where('c.estado',1)->get();

        $presentaciones = Presentacione::join('caracteristicas as c',
                                              'presentaciones.caracteristica_id',
                                              '=',
                                              'c.id')
                                              ->select('presentaciones.id as id','c.nombre as nombre')
                                              ->where('c.estado',1)->get();

        $categorias = Categoria::join('caracteristicas as c',
                                      'categorias.caracteristica_id',
                                      '=',
                                      'c.id')
                                      ->select('categorias.id as id','c.nombre as nombre')
                                      ->where('c.estado',1)->get();

        return view('producto.create', compact('marcas','presentaciones','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
