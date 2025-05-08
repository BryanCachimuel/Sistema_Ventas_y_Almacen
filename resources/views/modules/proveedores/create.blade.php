@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Proveedor</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nuevo Proveedor</h5>
            
            <form action="{{ route("proveedores.store") }}" method="POST">
                @csrf 
                <label for="nombre">Nombre de Proveedor</label>
                <input type="text" class="form-control" required name="nombre" id="nombre">

                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" required name="telefono" id="telefono">

                <label for="email">Correo</label>
                <input type="email" class="form-control" required name="email" id="email">

                <label for="codigo_postal">Código Postal</label>
                <input type="text" class="form-control" required name="codigo_postal" id="codigo_postal">

                <label for="sitio_web">Sitio Web</label>
                <input type="text" class="form-control" required name="sitio_web" id="sitio_web">

                <label for="notas">Notas</label>
                <textarea name="notas" id="notas" cols="20" rows="2" class="form-control"></textarea>

                <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <a href="{{ route("proveedores") }}" class="btn btn-outline-danger mt-3">
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