@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Editar Productos</h1>
    
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Editar Producto</h5>
            
            <form action="{{ route('productos.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row mb-2">
                  <label for="categoria_id" class="col-sm-2 col-form-label">Categoría:</label>
                  <div class="col-sm-10 col-form-label">
                    <select name="categoria_id" id="categoria_id" class="form-select" required>
                      <option value="">Selecciona una categoría</option>
                      @foreach ($categorias as $categoria)
                          @if ($item->categoria_id == $categoria->id)
                              <option selected value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                          @else
                              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                          @endif
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
                          @if ($item->proveedor_id == $proveedor->id)
                              <option selected value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                          @else
                              <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                          @endif 
                      @endforeach
                    </select>
                  </div>
                </div>
                
                <div class="form-group row mb-2">
                  <label for="codigo" class="col-sm-2 col-form-label">Código de producto:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="codigo" id="codigo" value="{{ $item->codigo }}" required>
                  </div>
                </div>
                
                <div class="form-group row mb-2">
                  <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $item->nombre }}" required>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                  <div class="col-sm-10 col-form-label">
                     <textarea class="form-control" name="descripcion" id="descripcion" cols="20" rows="2">{{ $item->descripcion }}</textarea>
                  </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="precio_venta" class="col-sm-2 col-form-label">Precio de Venta:</label>
                  <div class="col-sm-10 col-form-label">
                    <input type="text" name="precio_venta" id="precio_venta" class="form-control" value="{{ $item->precio_venta }}" required>
                  </div>
                </div>
                
                <div class="text-end">
                  <button class="btn btn-outline-primary mt-3"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
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