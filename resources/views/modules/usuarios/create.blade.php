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
                <label for="name">Nombre de Usuario</label>
                <input type="text" class="form-control" name="name" id="name" required>

                <label for="email">Correo</label>
                <input type="email" class="form-control" name="email" id="email" required>

                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" required>

                <label for="rol">Rol de Usuario</label>
                <select name="rol" id="rol" class="form-select">
                    <option value="">Selecciona el Rol</option>
                    <option value="admin">Administrador</option>
                    <option value="cajero">Cajero</option>
                </select>

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