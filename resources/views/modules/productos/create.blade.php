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
            
            <form action="{{ route("productos.store") }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="form-group row mb-2">
                  <label for="categoria_id" class="col-sm-2 col-form-label">Categoría:</label>
                  <div class="col-sm-10 col-form-label">
                    <select name="categoria_id" id="categoria_id" class="form-select" required>
                      <option value="">Selecciona una categoría</option>
                      @foreach ($categorias as $categoria)
                          <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="proveedor_id" class="col-sm-2 col-form-label">Proveedor:</label>
                  <div class="col-sm-10 col-form-label">
                     <select name="proveedor_id" id="proveedor_id" class="form-select" required>
                      <option value="">Selecciona un proveedor</option>
                      @foreach ($proveedores as $proveedor)
                      <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="codigo" class="col-sm-2 col-form-label">Código de producto:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="codigo" id="codigo" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                  <div class="col-sm-10 col-form-label">
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="20" rows="2"></textarea>
                  </div>
                </div>
                
                <div class="form-group row mb-2">
                  <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                  <div class="col-sm-10 col-form-label">
                     <input type="file" name="imagen" id="imagen" class="form-control">
                  </div>
                </div>

                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                  <a href="{{ route("productos") }}" class="btn btn-outline-danger mt-3">
                    <i class="fa-solid fa-circle-xmark"></i> Cancelar
                  </a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection