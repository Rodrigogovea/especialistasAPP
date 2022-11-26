$(document).ready(function(){

    $('#cargaTablaEspecialistas').load('Vistas/Especialistas/TablasEspecialistas.php');

});

function eliminarEspecialista() {
	swal({
		title: "¿Esta seguro de eliminar esta especialista?",
		text: "Una vez eliminado no podra ser recuperado!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
        if (willDelete) {
          swal("Poof! Ya corriste al especialista!", {
            icon: "success",
          });
        } else {
          swal("El especialista conservara su chamba!");
        }
      });
}