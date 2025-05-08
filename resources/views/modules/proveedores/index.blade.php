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
              <i class='bx bxs-plus-circle'></i> Agregar Proveedor
            </a>
            <hr>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                 <th class="text-center">Nombre</th>
                 <th class="text-center">Teléfono</th>
                 <th class="text-center">Correo</th>
                 <th class="text-center">Código Postal</th>
                 <th class="text-center">Sitio Web</th>
                 <th class="text-center">Nota</th>
                 <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr>
                  <td class="text-center">{{ $item->nombre }}</td>
                  <td class="text-center">{{ $item->telefono }}</td>
                  <td class="text-center">{{ $item->email }}</td>
                  <td class="text-center">{{ $item->codigo_postal }}</td>
                  <td class="text-center">{{ $item->sitio_web }}</td>
                  <td class="text-center">{{ $item->notas }}</td>
                  <td class="text-center">
                    <a href="{{ route("proveedores.edit", $item->id) }}" class="btn btn-outline-warning"><i class='bx bxs-edit'></i></a>
                    <a href="{{ route("proveedores.show", $item->id) }}" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></a>
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

