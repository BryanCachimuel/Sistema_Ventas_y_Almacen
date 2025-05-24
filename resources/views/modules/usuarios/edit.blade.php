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
            
            <form action="{{ route("usuarios.update", $item->id) }}" method="POST" autocomplete="off">
                @csrf
                @method("PUT")
    
                <div class="form-group row mb-2">
                  <label for="name" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $item->name }}" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="email" class="form-control"name="email" id="email" value="{{ $item->email }}" required>
                  </div>
                </div>

                <div class="form-group row mt-2">
                  <label for="rol" class="col-sm-2 col-form-label">Rol de Usuario: </label>
                  <div class="col-sm-10 col-form-label">
                    <select name="rol" id="rol" class="form-select">
                      @if ($item->rol == 'admin')
                        <option value="admin" selected>Administrador</option>
                        <option value="cajero">Cajero</option>
                      @else
                          <option value="admin">Administrador</option>
                          <option value="cajero" selected>Cajero</option>
                      @endif
                  </select>
                  </div>
                </div>

                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
                  <a href="{{ route("usuarios") }}" class="btn btn-outline-danger mt-3">
                    <i class="fa-solid fa-circle-xmark"></i> Cancelar
                  </a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection