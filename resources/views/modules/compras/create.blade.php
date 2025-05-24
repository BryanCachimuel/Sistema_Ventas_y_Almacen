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
            
            <form action="{{ route("compras.store") }}" method="POST" autocomplete="off">
                @csrf
                <input type="text" hidden value="{{ $item->id }}" id="id" name="id">

                <div class="form-group row mb-2">
                  <label for="cantidad" class="col-sm-2 col-form-label">Cantidad de Producto:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="precio_compra" class="col-sm-2 col-form-label">Precio de Compra:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="precio_compra" id="precio_compra" required>
                  </div>
                </div>

                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-cart-shopping"></i> Comprar</button>
                  <a href="{{ route("productos") }}" class="btn btn-outline-danger mt-3">
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