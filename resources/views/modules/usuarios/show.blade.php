@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Eliminar Usuarios</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">¿Estás seguro de eliminar esté usuario?</h5>

            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                   <th>Nombre</th>
                   <th>Correo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                  </tr>
                </tbody>
              </table>
            
            <div class="text-end">
              <form action="{{ route("usuarios.destroy", $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                <a href="{{ route("usuarios") }}" class="btn btn-outline-danger mt-3">
                  <i class="fa-solid fa-circle-xmark"></i> Cancelar
                </a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection