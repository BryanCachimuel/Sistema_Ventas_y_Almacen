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

            let message = "{{session('success')}}"

            Swal.fire({
                icon: "success",
                title: message,
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
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($categorias as $categoria)
                           <tr>
                            <td>
                                {{$categoria->caracteristica->nombre}}
                            </td>
                            <td>
                                {{$categoria->caracteristica->descripcion}}
                            </td>
                            <td>
                                @if ($categoria->caracteristica->estado == 1)
                                    <span class="fw-bolder p-1 rounded bg-success text-white">Activo</span>
                                @else
                                    <span class="fw-bolder p-1 rounded bg-warning text-white">Eliminado</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <form action="{{route('categorias.edit',['categoria'=>$categoria])}}" method="GET">
                                        <button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    </form>

                                    @if ($categoria->caracteristica->estado == 1)
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal-{{$categoria->id}}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#eliminarModal-{{$categoria->id}}">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </button>
                                    @endif
                                   
                                </div>
                            </td>
                           </tr>

                           <!-- modal para la eliminación -->
                            <div class="modal fade" id="eliminarModal-{{$categoria->id}}" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mensaje de Confirmación</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{$categoria->caracteristica->estado == 1 ? '¿Está seguro que quieres eliminar la categoría?' : '¿Está seguro que quieres restaurar la categoría?'}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{route('categorias.destroy',['categoria'=>$categoria->id])}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Confirmar</button>
                                            </form>
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
