<!-- Modal -->
<div class="modal fade" id="modalActualizarEspecialista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar especialista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEspecialistaU">
        <div id="EspecialistaIdU"></div>
          <label for="nombreU">Nombre</label>
          <input type="text" class="form-control" id="nombreU" name="nombreU">
          <label for="apaternoU">Apellido parterno</label>
          <input type="text" class="form-control" id="apaternoU" name="apaternoU">
          <label for="amaternoU">Apellido materno</label>
          <input type="text" class="form-control" id="amaternoU" name="amaternoU">
          <label for="telefonoU">Telefono</label>
          <input type="text" class="form-control" id="telefonoU" name="telefonoU">
          <label for="horarioU">Horario</label>
          <input type="text" class="form-control" id="horarioU" name="horarioU">
          <label for="meetU">Meet</label>
          <input type="radio" class="form-control" id="meetU" name="meetU" value="true" style="width: 13px">
          <label for="zoomU">Zoom</label>
          <input type="radio" class="form-control" id="zoomU" name="zoomU" value="true" style="width: 13px">
          <label for="otroU">Otro (Especificar plataforma)</label>
          <input type="textU" class="form-control" id="otroU" name="otroU">
          <label for="correoU">Correo</label>
          <input type="text" class="form-control" id="correoU" name="correoU">
          <label for="contrasenaU">Contraseña</label>
          <input type="contrasena" class="form-controlU" id="contrasena" name="contrasenaU">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarEspecialista">Actualizar</button>
      </div>
    </div>
  </div>
