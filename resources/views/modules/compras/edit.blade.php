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
                <label for="cantidad">Cantidad de Producto</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{ $item->cantidad }}" required>

                <label for="precio_compra">Precio de Compra</label>
                <input type="text" class="form-control" name="precio_compra" id="precio_compra" value="{{ $item->precio_compra }}" required>

                <button class="btn btn-warning mt-3">Actualizar</button>
                <a href="{{ route("compras") }}" class="btn btn-info mt-3">
                    Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection