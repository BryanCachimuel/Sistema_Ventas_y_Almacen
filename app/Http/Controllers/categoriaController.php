<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Models\Caracteristica;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Presentacione;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*TODO: se utiliza en este caso el with para obtener el id de caracteristica */
        $categorias = Categoria::with('caracteristica')->latest()->get();
        return view('categoria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * TODO: mediante el comando php artisan make:request StoreCategoriaRequest se crea la clase StoreCategoriaRequest
     * con la cual se podrán realizar las validaciones de los campos de texto del formulario
     */
    public function store(StoreCategoriaRequest $request)
    {
        try {
            DB::beginTransaction();                                          /* Inicio de la transacción */
            $caracteristica = Caracteristica::create($request->validated());
            $caracteristica->categoria()->create([
                'caracteristica_id' => $caracteristica->id
            ]);
            DB::commit();                                                       /* si todo resulta correcto se hace el commit  */
        } catch (Exception $e) {
            DB::rollBack();                                                     /* si no esta correcto el procedimiento de la consulta se revierte todo */
        }
        return redirect()->route('categorias.index')->with('success','Categoría Registrada');
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
    public function edit(Categoria $categoria)
    {
        return view('categoria.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        Caracteristica::where('id',$categoria->caracteristica->id)->update($request->validated());
        return redirect()->route('categorias.index')->with('success','Categoría Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = '';

        $categoria = Categoria::find($id);
        if($categoria->caracteristica->estado == 1){
            Caracteristica::where('id',$categoria->caracteristica->id)->update([
                'estado'=>0
            ]);
            $message = 'Categoría Eliminada';
        }else{
            Caracteristica::where('id',$categoria->caracteristica->id)->update([
                'estado'=>1
            ]);
            $message = 'Categoría Restaurada';
        }
        
        return redirect()->route('categorias.index')->with('success',$message);
        
    }
}
