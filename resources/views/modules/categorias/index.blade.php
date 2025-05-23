@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Categorias</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Categorías</h5>
            <p>Administrar las categorías de los productos</p>

            <a href="{{ route('categorias.create') }}" class="btn btn-primary">
              <i class='bx bxs-plus-circle'></i> Agregar Nueva Categoría
            </a>
            <hr>
            <!-- Table with stripped rows -->
            <table class="table datatable table-condensed">
              <thead>
                <tr>
                 <th class="text-center">Nombre Categoría</th>
                 <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr class="text-center">
                  <td>
                    {{ $item->nombre }}
                  </td>
                  <td>
                    <a href="{{ route("categorias.edit", $item->id) }}" class="btn btn-outline-success"><i class='bx bxs-edit'></i></a>
                    <a href="{{ route("categorias.show", $item->id) }}" class="btn btn-outline-danger"><i class='bx bxs-trash'></i></a>
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

