<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = "Usuarios";
        $items = User::all();
        return view('modules.usuarios.index', compact('titulo','items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo = "Crear Usuarios";
        return view('modules.usuarios.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'activo' => true,
            'rol' => $request->rol
        ]);
        return to_route('usuarios')->with('success','Usuario Guardado con Éxito');
       } catch (Exception $e) {
        return to_route('usuarios')->with('error','Error al guardar usuario' . $e->getMessage());
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo = 'Eliminar Categoría';
        $item = User::find($id);
        return view('modules.usuarios.show', compact( 'titulo','item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $titulo = "Editar Usuario";
        $item = User::find($id);
        return view('modules.usuarios.edit', compact('titulo','item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $item = User::find($id);
            $item->name = $request->name;
            $item->email = $request->email;
            $item->rol = $request->rol;
            $item->save();
            return to_route('usuarios')->with('success', 'Usuario Actualizado con Éxito');
        } catch (Exception $e) {
            return to_route('usuarios')->with('error','Error al actualizar los datos del usuario' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = User::find($id);
            $item->delete();
            return to_route('usuarios')->with('success','Usuario Eliminada');
        } catch (Exception $e) {
            return to_route('usuarios')->with('error', 'No se pudo eliminar el usuario' . $e->getMessage());
        }
    }

    public function tbody()
    {
        $items = User::all();
        return view('modules.usuarios.tbody', compact('items'));
    }

    public function estado($id, $estado)
    {
        $item = User::find($id);
        $item->activo = $estado;
        return $item->save();
    }

    public function cambio_password($id, $password)
    {
        $item = User::find($id);
        $item->password = Hash::make($password);
        return $item->save();
    }
}
