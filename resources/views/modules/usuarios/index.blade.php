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
              <tbody id="tbody-usuarios">
                @include('modules.usuarios.tbody')
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
@include('modules.usuarios.modal_cambiar_password')
@endsection

@push('scripts')
    <script>

      function recargar_tbody(){
        $.ajax({
          type : "GET",
          url : "{{ route('usuarios.tbody') }}",
          success : function(respuesta){
            console.log(respuesta)
          } 
        });
      }

      // controlar el estado de los usuarios (activado, desactivado)
      function cambiar_estado(id, estado){
        $.ajax({
          type : "GET",
          url : "usuarios/cambiar-estado/" + id + "/" + estado,
          success : function(respuesta){
            if(respuesta == 1){
              alert("Cambio de estado Correcto");
              recargar_tbody();
            }
          }
        });
      }

      function agregar_id_usuario(id){
        $('#id_usuario').val(id);
      }

      function cambio_password(){
        let id = $('#id_usuario').val();
        let password = $('#password').val();

        $.ajax({
          type : "GET",
          url : "usuarios/cambiar-password/" + id + "/" + password,
          success : function(respuesta){
            if(respuesta == 1){
              alert("Contraseña actualizada con éxito");
              $('#frmPassword')[0].reset();
            }
          }
        });
        return false;
      }

      $(document).ready(function(){
        $('.form-check-input').on("change", function(){
          let id = $(this).attr("id");
          let estado = $(this).is(":checked") ? 1 : 0;
          cambiar_estado(id, estado);
        });
      });
    </script>
@endpush

