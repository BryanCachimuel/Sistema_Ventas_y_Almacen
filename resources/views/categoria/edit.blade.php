@extends('template')

@section('title', 'Editar Categoria')

@push('css')
    
@endpush

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-center">Editar Categoría</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
        <li class="breadcrumb-item active">Editar Categoría</li>
    </ol>

    <div class="container w-10 border border-3 border-primary rounded p-4 mt-3">

        <form action="{{ route('categorias.update',['categoria'=>$categoria]) }}" method="post" autocomplete="off">
            @method('PATCH')
            @csrf
            <div class="row g-3">

                <div class="col-md-12">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre',$categoria->caracteristica->nombre)}}">
                    @error('nombre')
                        <small class="text-danger"><strong>{{'* '.$message}}</strong></small>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea name="descripcion" class="form-control" id="descripcion" rows="3">{{old('descripcion',$categoria->caracteristica->descripcion)}}</textarea>
                    @error('descripcion')
                        <small class="text-danger"><strong>{{'*'.$message}}</strong></small>
                    @enderror
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection

@push('js')
    
@endpush