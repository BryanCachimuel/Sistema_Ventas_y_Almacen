@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Categoría</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nueva Categoria</h5>
            
            <form action="{{ route("categorias.store") }}" method="POST">
                @csrf

                <div class="form-group row mb-2">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" required name="nombre" id="nombre">
                  </div>
                </div>

               <div class="text-end">
                <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <a href="{{ route("categorias") }}" class="btn btn-outline-danger mt-3">
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