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
             <div class="input-group mb-2">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <div class="form-floating">
                    <input type="text" name="id_usuario" id="id_usuario" hidden>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    <label for="password">Contraseña Nueva</label>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i> Actualizar</button>
              <span class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Cerrar</span>
            </div>
          </div>
        </div>
      </div>
</form>