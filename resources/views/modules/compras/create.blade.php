@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Hacer una Compra</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Compra Nueva de: <span style="color: #0000ff; font-size: 20px;">{{ $item->nombre }}</span></h5>
            
            <form action="{{ route("compras.store") }}" method="POST">
                @csrf
                <input type="text" hidden value="{{ $item->id }}" id="id" name="id">

                <label for="cantidad">Cantidad de Producto</label>
                <input type="text" class="form-control" name="cantidad" id="cantidad" required>

                <label for="precio_compra">Precio de Compra</label>
                <input type="text" class="form-control" name="precio_compra" id="precio_compra" required>

                <button class="btn btn-primary mt-3">Comprar</button>
                <a href="{{ route("productos") }}" class="btn btn-info mt-3">
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