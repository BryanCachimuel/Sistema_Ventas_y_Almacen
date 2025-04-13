@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar Usuario</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Usuario</h5>
            
            <form action="{{ route("usuarios.update", $item->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="name">Nombre de Usuario</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}" required>

                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $item->email }}" required>

                <label for="rol">Rol de Usuario</label>
                <select name="rol" id="rol" class="form-select">
                    @if ($item->rol == 'admin')
                        <option value="admin" selected>Administrador</option>
                        <option value="cajero">Cajero</option>
                    @else
                        <option value="admin">Administrador</option>
                        <option value="cajero" selected>Cajero</option>
                    @endif
                   
                    
                </select>
                <button class="btn btn-warning mt-3">Actualizar</button>
                <a href="{{ route("usuarios") }}" class="btn btn-info mt-3">
                    Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection