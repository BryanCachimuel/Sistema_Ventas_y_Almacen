@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Consulta de Ventas Realizadas</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Revisar Ventas existentes</h5>
      
            <!-- Table with stripped rows -->
            <table class="table datatable table-condensed">
              <thead>
                <tr>
                 <th class="text-center">Total Vendido</th>
                 <th class="text-center">Fecha Venta</th>
                 <th class="text-center">Usuario</th>
                 <th class="text-center">Ver Detalle</th>
                 <th class="text-center">Imprimir Ticket</th>
                 <th class="text-center">Revocar Venta</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr>
                  <td class="text-center">${{ $item->total_venta }}</td>
                  <td class="text-center">{{ $item->created_at }}</td>
                  <td class="text-center">{{ $item->nombre_usuario }}</td>
                  <td class="text-center">
                    <a href="{{ route('detalle.vista.detalle', $item->id) }}" class="btn btn-info">Detalle</a>
                  </td>
                  <td></td>
                  <td class="text-center">
                    <form action="{{ route('detalle.revocar', $item->id) }}" method="POST" onsubmit="return confirm('¿Está seguro de revocar está venta?')">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Revocar</button>
                    </form>
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