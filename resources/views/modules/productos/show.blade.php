@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Eliminar Productos</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Eliminar Producto del Stock</h5>
            <p>Una vez el producto sea eliminado, no podrá ser recuperado</p>
  
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr class="text-center">
                 <th>Categoría</th>
                 <th>Proveedor</th>
                 <th>Nombre</th>
                 <th>Descripción</th>
                 <th>Cantidad</th>
                 <th>Venta</th>
                 <th>Compra</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>{{ $item->nombre_categoria }}</td>
                  <td>{{ $item->nombre_proveedor }}</td>
                  <td>{{ $item->nombre }}</td>
                  <td>{{ $item->descripcion }}</td>
                  <td>{{ $item->cantidad }}</td>
                  <td>{{ $item->precio_compra }}</td>
                  <td>{{ $item->precio_venta }}</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
            <hr>
            <form action="{{ route("productos.destroy", $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-primary"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                <a href="{{ route("productos") }}" class="btn btn-outline-danger"><i class="fa-solid fa-circle-xmark"></i> Cancelar</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection

