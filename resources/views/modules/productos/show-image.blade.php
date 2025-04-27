@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Editar Imagen de Producto</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar imagen de Producto del Stock</h5>

            <hr>
            <form action="{{ route('productos.update.image', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="imagen">Selecciona la nueva imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control">

               <div class="mt-3">
                <button class="btn btn-warning">Actualizar Imagen</button>
                <a href="{{ route("productos") }}" class="btn btn-info">Cancelar</a>
               </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection

