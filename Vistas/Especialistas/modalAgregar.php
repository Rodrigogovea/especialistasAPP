<!-- Modal -->
<div class="modal fade" id="modalAgregarEspecialista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo especialista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEspecialista">
          <div id="EspecialistaId"></div>
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
          <label for="apaterno">Apellido parterno</label>
          <input type="text" class="form-control" id="apaterno" name="apaterno">
          <label for="amaterno">Apellido materno</label>
          <input type="text" class="form-control" id="amaterno" name="amaterno">
          <label for="telefono">Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono">
          <label for="horario">Horario</label>
          <input type="text" class="form-control" id="horario" name="horario">
          <label for="meet">Meet</label>
          <input type="radio" class="form-control" id="meet" name="meet" value="true" style="width: 13px">
          <label for="zoom">Zoom</label>
          <input type="radio" class="form-control" id="zoom" name="zoom" value="true" style="width: 13px">
          <label for="otro">Otro (Especificar plataforma)</label>
          <input type="text" class="form-control" id="otro" name="otro">
          <label for="correo">Correo</label>
          <input type="text" class="form-control" id="correo" name="correo">
          <label for="contrasena">Contraseña</label>
          <input type="contrasena" class="form-control" id="contrasena" name="contrasena">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarEspecialista">Guardar</button>
      </div>
    </div>
  </div>
</div>