@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Usuario</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nuevo Usuario</h5>
            
            <form action="{{ route("usuarios.store") }}" method="POST">
                @csrf

                <div class="form-group row mb-2">
                  <label for="name" class="col-sm-2 col-form-label">Nombre de Usuario: </label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="name" id="name" required>
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Correo de Usuario: </label>
                  <div class="col-sm-10 col-form-label">
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>

                <div class="form-group row mt-2">
                  <label for="password" class="col-sm-2 col-form-label">Contraseña: </label>
                  <div class="col-sm-10 col-form-label">
                    <input type="password" class="form-control" name="password" id="password" required>
                  </div>
                </div>
                
                <div class="form-group row mt-2">
                  <label for="rol" class="col-sm-2 col-form-label">Rol de Usuario: </label>
                  <div class="col-sm-10 col-form-label">
                    <select name="rol" id="rol" class="form-select">
                      <option value="">Seleccione un Rol</option>
                      <option value="admin">Administrador</option>
                      <option value="cajero">Cajero</option>
                  </select>
                  </div>
                </div>

                <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <a href="{{ route("usuarios") }}" class="btn btn-outline-danger mt-3">
                  <i class="fa-solid fa-circle-xmark"></i> Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection