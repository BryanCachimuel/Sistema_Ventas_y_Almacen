@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Eliminar compra de Producto</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Eliminar Compra</h5>
            <p>Una vez eliminada la compra, no podrá ser recuperada</p>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead>
                <tr class="text-center">
                 <th>Usuario</th>
                 <th>Producto</th>
                 <th>Cantidad</th>
                 <th>Precio de Compra</th>
                 <th>Total Compra</th>
                 <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-center">
                  <td>{{ $items->nombre_usuario }}</td>
                  <td>{{ $items->nombre_producto }}</td>
                  <td>{{ $items->cantidad }}</td>
                  <td>$ {{ $items->precio_compra }}</td>
                  <td>$ {{ $items->precio_compra * $items->cantidad }}</td>
                  <td>{{ $items->created_at }}</td>
                </tr>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
            <hr>
            <form action="{{ route('compras.destroy', $items->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="text" hidden name="producto_id" id="producto_id" value="{{ $items->producto_id }}">
                <button class="btn btn-outline-primary"><i class="fa-solid fa-trash-can"></i> Eliminar</button>
                <a href="{{ route("compras") }}" class="btn btn-outline-danger">
                  <i class="fa-solid fa-circle-xmark"></i> Cancelar
                </a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@endsection