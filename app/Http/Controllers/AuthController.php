<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        $titulo = "Login de Usuario";
        return view("modules.auth.login", compact("titulo"));
    }

    public function logear(Request $request){
        // validar datos de las credenciales
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // buscar si el correo existe en la base de datos
        $usuario = User::where('email', $request->email)->first();

        // validar usuario y contraseña
        if(!$usuario || !Hash::check($request->password, $usuario->password)){
            return back()->withErrors(['email' => 'Credencial Incorrecta'])->withInput();
        }

        // validar si el usuario está activo
        if(!$usuario->activo){
            return back()->withErrors(['email' => 'Tu cuenta está inactiva']);
        }

        // crear la sesión de usuario
        Auth::login($usuario);
        $request->session()->regenerate();

        return to_route('home');
    }

    public function crearAdministrador(){
        // crear directamente un administrador
        User::create([
            'name' => 'Bryan LCL',
            'email' => 'blcl@gmail.com',
            'password' => Hash::make('admin'),
            'activo' => true,
            'rol' => 'admin'
        ]);

        return "Administrador creado con exito";
    }
}
