@extends('template')

@section('title', 'Productos')

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
    <h1 class="mt-4 text-center">Productos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Productos</li>
    </ol>

    <div class="mb-4">
        <a href="{{ route('productos.create') }}">
            <button type="button" class="btn btn-primary">
                Añadir nuevo Registro
            </button>
        </a>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabla Productos
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Presentación</th>
                        <th>Categorias</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->codigo}}</td>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->marca->caracteristica->nombre}}</td>
                            <td>{{$producto-presentacione->caracteristica->nombre>}}</td>
                            <td>
                                @foreach ($producto->categoria as $ctg)
                                    <div class="container">
                                        <div class="row">
                                            <span class="m-1 rounded-pill p-1 bg-secondary text-white text-center">{{$ctg->caracteristica->nombre}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                @if ($producto->estado == 1)
                                    <span class="fw-bolder rounded p-1 bg-success text-white">Activo</span>
                                @else
                                <span class="fw-bolder rounded p-1 bg-danger text-white">Eliminado</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning">Editar</button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verModal-{{$producto->id}}">Ver</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Modal para ver -->
                        <div class="modal fade" id="verModal-{{$producto->id}}" tabindex="-1" aria-labelledby="verModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detalles del Producto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                        <div class="modal-body">

                                            <div class="row mb-3">
                                                <label for="descripcion" class="form-label"> <span class="fw-bolder">Descripcion:</span> {{$producto->descripcion}}</label>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="fecha_vencimiento" class="form-label"><span class="fw-bolder">Fecha de Vencimiento:{{$producto->fecha_vencimiento =='' ? 'No tiene' : $producto->fecha_vencimiento}} </span></label>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="stock" class="form-label"><span class="fw-bolder">Stock: {{$producto->stock}}</span></label>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="img_path" class="form-label">Imagen: </label>
                                                <div>
                                                    @if ($producto->img_path != null)
                                                        <img src="{{Storage::url(''.$producto->img_path)}}" alt="">
                                                    @else
                                                        
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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