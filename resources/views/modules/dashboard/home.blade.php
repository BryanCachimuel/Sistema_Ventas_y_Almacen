@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bienvenido, {{ Auth::user()->name }}</h5>
           
            <div class="row">
              <div class="col">
                <h4>Total de ventas: ${{ number_format($totalVentas, 2) }}</h4>
              </div>
              <div class="col">
                <h4>Cantidad de ventas: {{ $cantidadVentas }}</h4>
              </div>
              <div class="col">
                <h4>Productos con Bajo Stock: {{ count($productoBajosStock) }}</h4>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <h3>Últimas ventas:</h3>
                <ul>
                  @foreach ($ventasRecientes as $item)
                      <li>Venta #{{ $item->id }} - ${{ number_format($item->total_venta, 2) }}</li>
                  @endforeach
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

