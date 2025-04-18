@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Agregar Productos</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Agregar Nuevo Producto</h5>
            
            <form action="{{ route("productos.store") }}" method="POST">
                @csrf
                <label for="categoria_id">Categoría</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>

                <label for="proveedor_id">Proveedor</label>
                <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                    <option value="">Selecciona un proveedor</option>
                    @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>

                <label for="nombre">Nombre de producto</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>

                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="20" rows="5"></textarea>

                <button class="btn btn-primary mt-3">Guardar</button>
                <a href="{{ route("productos") }}" class="btn btn-info mt-3">
                    Cancelar
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection