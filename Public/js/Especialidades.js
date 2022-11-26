$(document).ready(function(){

    $('#cargaTablaEspecialidades').load('../../Vistas/Especialidades/TablasEspecialidades.php');

    $('#btnGuardarEspecialidad').click(function(){
      agregarEspecialidad();
    });

});

function agregarEspecialidad(){
	$.ajax({
		type: "POST",
		data: $('#frmAgregarEspecialidad').serialize(),
		//Cambiarlo a por el sql
		url: "Procesos/Especialidades/agregarEspecialidad.php",
		success:function(respuesta) {
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#frmAgregarEspecialidad')[0].reset();
				swal(":D","Se agrego con exito!","success");
			} else {
				swal(":(","No se pudo agregar!","error");
			}
		}
	});
}


function eliminarEspecialidad() {
	swal({
		title: "¿Esta seguro de eliminar esta especialidad?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
        if (willDelete) {
          swal("Poof! La especialidad ha sido eliminada!", {
            icon: "success",
          });
        } else {
          swal("La especialidad ha sido salvada!");
        }
      });
}