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

                <div class="form-group row mb-2">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" required name="nombre" id="nombre">
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="telefono" class="col-sm-2 col-form-label">Celular:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" required name="telefono" id="telefono">
                  </div>
                </div>
                
                <div class="form-group row mb-2">
                  <label for="email" class="col-sm-2 col-form-label">Correo:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="email" class="form-control" required name="email" id="email">
                  </div>
                </div>
                
                
                <div class="form-group row mb-2">
                  <label for="codigo_postal" class="col-sm-2 col-form-label">Código Postal:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" required name="codigo_postal" id="codigo_postal">
                  </div>
                </div>
                
                <div class="form-group row mb-2">
                  <label for="sitio_web" class="col-sm-2 col-form-label">Sitio Web:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" required name="sitio_web" id="sitio_web">
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="notas" class="col-sm-2 col-form-label">Notas:</label>
                  <div class="col-sm-10 col-form-label">
                    <textarea name="notas" id="notas" cols="20" rows="2" class="form-control"></textarea>
                  </div>
                </div>

                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                  <a href="{{ route("proveedores") }}" class="btn btn-outline-danger mt-3">
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