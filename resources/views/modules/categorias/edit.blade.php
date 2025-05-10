@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar Categoría</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Categoria</h5>
            
            <form action="{{ route("categorias.update", $item->id) }}" method="POST">
                @csrf
                @method("PUT")

                <div class="form-group row mb-2">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" 
                       class="form-control"
                       name="nombre" 
                       id="nombre"
                       value="{{ $item->nombre }}">
                  </div>
                </div>

                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
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