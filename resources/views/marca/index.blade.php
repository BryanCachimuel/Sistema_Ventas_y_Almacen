@extends('template')

@section('title', 'Marca')

@push('css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css">
@endpush

@section('content')

    <!-- dentro del método store se envia un mensaje con la clave success -->
    @if (session('success'))
        <script>
            let message = "{{ session('success') }}"

            Swal.fire({
                icon: "success",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    <div class="container-fluid px-4">
        <h1 class="mt-4 text-center">Marca</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Marcas</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('marcas.create') }}">
                <button type="button" class="btn btn-primary">Añadir nuevo Registro</button>
            </a>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabla de Marcas
            </div>
            <div class="card-body">
                <table id="datatablesSimple" class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripciones</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                            <tr>
                                <td>{{ $marca->caracteristica->nombre }}</td>
                                <td>{{ $marca->caracteristica->descripcion }}</td>
                                <td>{{ $marca->caracteristica->estado }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <form action="{{ route('marcas.edit', ['marca' => $marca]) }}" method="get">
                                            <button type="submit" class="btn btn-warning">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModallLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mensaje de Confirmación</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Está seguro que quieres eliminar la categoría?'
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
