@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar una Compra</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edición de: <span style="color: #0000ff; font-size: 20px;">{{ $item->nombre_producto }}</span></h5>
            
            <form action="{{ route("compras.update", $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" hidden name="producto_id" id="producto_id" value="{{ $item->producto_id }}">

                <div class="form-group row mb-2">
                  <label for="cantidad" class="col-sm-2 col-form-label">Cantidad de Producto:</label>
                  <div class="col-sm-10 col-form-label">
                     <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{ $item->cantidad }}" required>
                  </div>
                </div>

               <div class="form-group row mb-2">
                  <label for="precio_compra" class="col-sm-2 col-form-label">Precio de Compra:</label>
                  <div class="col-sm-10 col-form-label">
                     <input type="text" class="form-control" name="precio_compra" id="precio_compra" value="{{ $item->precio_compra }}" required>
                  </div>
                </div>
                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
                  <a href="{{ route("compras") }}" class="btn btn-outline-danger mt-3">
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