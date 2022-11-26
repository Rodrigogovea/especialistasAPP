<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover table-condensed" id="tablaEspecialistasDT">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Especialidad</th>
                    <th>Telefono</th>
                    <th>Horrario</th>
                    <th>Meet</th>
                    <th>Zoom</th>
                    <th>Otro</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizarEspecialista">
                            <span class="fas fa-edit"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-danger btn-sm" onclick="eliminarEspecialista()">
                            <span class="far fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaEspecialistasDT').DataTable();
	});
</script>