@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Productos</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Productos y Stock</h5>
            <p>Administrar el Stock del Sistema</p>
            <p>
              <a href="" class="btn btn-success"> 
                <i class="fa-solid fa-chart-line"></i> Productos con Stock Mínimo
              </a>
            </p>
            <hr>
            <a href="{{ route("productos.create") }}" class="btn btn-primary">
              <i class='bx bxs-plus-circle'></i> Crear Producto
            </a>
            <hr>
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
                 <th>Activo</th>
                 <th>Comprar</th>
                 <th>Acciones</th>
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
                  <td>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="{{ $item->id }}"
                      {{ $item->activo ? 'checked' : '' }}>
                    </div>
                  </td>
                  <td>
                    <a href="" class="btn btn-info">Comprar</a>
                  </td>
                  <td>
                    <a href="" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                    <a href="" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                  </td>
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

