@extends('template')

@section('title', 'presentaciones')

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
    <h1 class="mt-4 text-center">Presentaciones</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Presentaciones</li>
    </ol>

   <div class="mb-4">
        <a href="{{route('presentaciones.create')}}">
            <button type="button" class="btn btn-primary">
                Añadir nuevo Registro
            </button>
        </a>
   </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Tabla Presentaciones
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