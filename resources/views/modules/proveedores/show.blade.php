@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Eliminar Proveedor</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">¿Estás seguro de eliminar esté proveedor?</h5>

            <table class="table table-striped">
                <thead>
                  <tr class="text-center">
                   <th>Nombre</th>
                   <th>Teléfono</th>
                   <th>Correo</th>
                   <th>Sitio Web</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->sitio_web }}</td>
                  </tr>
                </tbody>
              </table>
            
           <div class="text-end">
             <form action="{{ route("proveedores.destroy", $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                <a href="{{ route("proveedores") }}" class="btn btn-outline-danger mt-3">
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