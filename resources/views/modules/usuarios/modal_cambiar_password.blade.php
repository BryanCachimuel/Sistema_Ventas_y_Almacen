  <!-- Modal -->
<form id="frmPassword" onsubmit="return cambio_password()">
    <div class="modal fade" id="cambiar_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Contraseña</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <input type="text" name="id_usuario" id="id_usuario" hidden>
              <label for="password">Contraseña Nueva</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="modal-footer">
              <span class="btn btn-danger" data-bs-dismiss="modal">Cerrar</span>
              <button class="btn btn-warning">Actualizar</button>
            </div>
          </div>
        </div>
      </div>
</form>