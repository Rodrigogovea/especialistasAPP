<!-- Modal -->
<div class="modal fade" id="modalActualizarEspecialidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar una especialidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarEspecialidad">
          <input type="text" name="idEspecialidad" id="idEspecialidad" hidden="">
          <label for="nombreEspecialidadU">Nombre</label>
          <input type="text" id="nombreEspecialidadU" name="nombreEspecialidadU" class="form-control">

        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizarEspecialidad">Actualizar</button>
      </div>
    </div>
  </div>
</div>