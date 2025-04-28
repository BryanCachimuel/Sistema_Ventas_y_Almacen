@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Proveedores</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Proveedores</h5>
            <p>Administrar los Proveedores de los productos</p>

            <a href="{{ route('proveedores.create') }}" class="btn btn-primary">
              <i class='bx bxs-plus-circle'></i> Agregar Nuevo Proveedor
            </a>
            <hr>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr class="text-center">
                 <th>Nombre</th>
                 <th>Teléfono</th>
                 <th>Correo</th>
                 <th>Código Postal</th>
                 <th>Sitio Web</th>
                 <th>Nota</th>
                 <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr class="text-center">
                  <td>{{ $item->nombre }}</td>
                  <td>{{ $item->telefono }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->codigo_postal }}</td>
                  <td>{{ $item->sitio_web }}</td>
                  <td>{{ $item->notas }}</td>
                  <td>
                    <a href="{{ route("proveedores.edit", $item->id) }}" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                    <a href="{{ route("proveedores.show", $item->id) }}" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
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

