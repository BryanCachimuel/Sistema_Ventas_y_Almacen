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
            
            <span>
                @if (Auth::user()->rol == 'admin')
                  <h3 class="mt-3 mb-4"><i class="fa-solid fa-user-tie"></i> Bienvenido, {{ Auth::user()->name }}</h3>
                @else
                  <h3 class="mt-3 mb-4"> <i class="fa-regular fa-user"></i> Bienvenido, {{ Auth::user()->name }}</h3>  
                @endif
              </span>
            <div class="row">
              <div class="col-4">
                <div class="card w-55 bg-primary">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Total de ventas</h5>
                    <h2 class="card-text text-white text-center">${{ number_format($totalVentas, 2) }}</h2>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card w-55 bg-danger">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Total de Productos</h5>
                    <h2 class="card-text text-white text-center">{{ $cantidadProductos}}</h2>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card w-55 bg-success">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Cantidad de ventas</h5>
                    <h2 class="card-text text-white text-center">{{ $cantidadVentas }}</h2>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="row mt-3">
              <div class="col-4">
                <div class="card w-55 bg-info">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Total Usuarios</h5>
                    <h2 class="card-text text-white text-center">{{ $cantidadUsuarios }}</h2>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card w-55 bg-secondary">
                  <div class="card-body">
                    <h5 class="card-title text-white text-center">Total Proveedores</h5>
                    <h2 class="card-text text-white text-center">{{ $cantidadProveedores }}</h2>
                  </div>
                </div>
              </div>

              <div class="col-4">
                <div class="card w-55 bg-warning">
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

