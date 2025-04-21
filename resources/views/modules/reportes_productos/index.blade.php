@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Reporte de Productos</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar los Reportes de Productos</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr class="text-center">
                 <th>Categoría</th>
                 <th>Proveedor</th>
                 <th>Nombre</th>
                 <th>Imagen</th>
                 <th>Descripción</th>
                 <th>Cantidad</th>
                 <th>Venta</th>
                 <th>Compra</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr class="text-center">
                  <td>{{ $item->nombre_categoria }}</td>
                  <td>{{ $item->nombre_proveedor }}</td>
                  <td>{{ $item->nombre }}</td>
                  <td></td>
                  <td>{{ $item->descripcion }}</td>
                  <td>{{ $item->cantidad }}</td>
                  <td>{{ $item->precio_compra }}</td>
                  <td>{{ $item->precio_venta }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection