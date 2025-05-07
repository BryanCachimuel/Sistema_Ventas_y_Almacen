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
            <h3 class="mt-3 mb-4">Bienvenido, {{ Auth::user()->name }}</h3>
           
            <div class="row">
              <div class="col-1"></div>
              <div class="col-5">
                <div class="card w-50 bg-primary">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Total de ventas</h5>
                    <h2 class="card-text text-white text-center">${{ number_format($totalVentas, 2) }}</h2>
                  </div>
                </div>
              </div>

              <div class="col-1"></div>

              <div class="col-5">
                <div class="card w-50 bg-success">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Cantidad de ventas</h5>
                    <h2 class="card-text text-white text-center">{{ $cantidadVentas }}</h2>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row mt-3">
              <div class="col-1"></div>
              <div class="col-5">
                <div class="card w-50 bg-info">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Últimas ventas</h5>
                    <h3 class="card-text text-white text-center">
                        @foreach ($ventasRecientes as $item)
                            Venta #{{ $item->id }} - ${{ number_format($item->total_venta, 2) }}
                        @endforeach
                    </h3>
                  </div>
                </div>
              </div>

              <div class="col-1"></div>

              <div class="col-5">
                <div class="card w-50 bg-warning">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Productos con Menor Stock</h5>
                    <h2 class="card-text text-white text-center">{{ count($productoBajosStock) }}</h2>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection

