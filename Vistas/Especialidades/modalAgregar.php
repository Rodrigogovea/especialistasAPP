<!-- Modal -->
<div class="modal fade" id="modalAgregarEspecialidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar una especialidad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmAgregarEspecialidad">
          <label for="nombreEspecialidad">Nombre</label>
          <input type="text" id="nombreEspecialidad" name="nombreEspecialidad" class="form-control">
          <label for="DescripcionEspecialidad">Descripcion</label>
          <input type="text" id="DescripcionEspecialidad" name="DescripcionEspecialidad" class="form-control">
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarEspecialidad">Guardar</button>
      </div>
    </div>
  </div>
</div>