@extends('layouts.main')

@section('titulo', $titulo)
    
@section('contenido')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Usuarios</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Administrar Usuarios</h5>
            <p>Administrar las cuentas y roles de los Usuarios</p>

            <a href="{{ route("usuarios.create") }}" class="btn btn-primary">
              <i class="fa-solid fa-user-plus"></i> Agregar Nuevo Usuario
            </a>
            <hr>
            <!-- Table with stripped rows -->
            <table class="table table-striped">
              <thead class="text-center">
                <tr>
                 <th>Correo</th>
                 <th>Nombre</th>
                 <th>Rol</th>
                 <th>Cambio Contraseña</th>
                 <th>Activo</th>
                 <th>Editar</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $item)
                <tr class="text-center">
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->name }}</td>
                  <td>
                    @if ($item->rol == 'admin')
                        Administrador
                    @else
                        Cajero
                    @endif
                  </td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa-solid fa-user-lock"></i>
                    </a>
                  </td>
                  <td>
                    @if ($item->activo)
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchCheckChecked" checked>
                    </div>
                    
                    @else
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault"> 
                    </div>
                    
                    @endif
                  </td>
                  <td>
                    <a href="{{ route("usuarios.edit", $item->id) }}" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i></a>
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

