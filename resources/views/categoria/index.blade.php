@extends('template')

@section('title', 'categorias')

@push('css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
@endpush

@section('content')
    <!-- dentro del método store se envia un mensaje con la clave success -->
    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Registro Exitoso",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center">Categorías</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Categorías</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('categorias.create') }}">
                <button type="button" class="btn btn-primary">Añadir Nuevo Registro</button>
            </a>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla Categorias
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripciones</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($categorias as $categoria)
                           <tr>
                            <td>{{$categoria->caracteristica->nombre}}</td>
                            <td>{{$categoria->caracteristica->descripcion}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                           </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
@endpush
