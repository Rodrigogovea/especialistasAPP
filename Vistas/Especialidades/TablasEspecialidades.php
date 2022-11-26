<?php
    require_once ("../../Clases/Conexion.php");
    $objEsp = new Conexion();
    $conexion= $objEsp->conectar();
    $sql = "SELECT Nom_Especialidad, Descripcion FROM especialidades";
    $result = mysqli_query($conexion, $sql);
?>
<div class="card">
  <div class="card-body">
    <div class="table-responsive">
        <table class="table table-hover table-condensed" id="tablaEspecialidadesDT">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while($mostrar = mysqli_fetch_array($result)) :  ?>
				<?php $Id_Especialidad = $mostrar['Id_Especialidad']; ?>
				
					<tr>
						<td><?php echo $mostrar['Nom_Especialidad'] ?></td>
						<td><?php echo $mostrar['Descripcion'] ?></td>
						<td>
							<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizarEspecialidad">
								<span class="fas fa-edit"></span>
							</span>
						</td>
						<td>
							<span class="btn btn-danger btn-sm" onclick="eliminarEspecialidad()">
								<span class="far fa-trash-alt"></span>
							</span>
						</td>
					</tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaEspecialidadesDT').DataTable();
	});
</script>