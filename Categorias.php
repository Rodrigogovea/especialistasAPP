<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
    <LINK rel="icon" type="image/png" href="imagenes/Logo_DIF.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once "Dependencias.php"; ?>
    <title>Document</title>
</head>
<body>  
<div class="container">
        <?php require_once "Menu.php"; ?>

        <div class="jumbotron">
            <h1 class="display-4">Especialidades</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEspecialidad" >
                <span class="fas fa-notes-medical"></span>Agregar especialidad
            </button>
            <hr class="my-4">
            
            <div id="cargaTablaEspecialidades"></div>
            
        </div>
        <?php
			require_once "Vistas/Especialidades/modalAgregar.php";
			require_once "vistas/Especialidades/modalActualizar.php";
		?>
    </div>
    <script src="Public/js/Especialidades.js"></script>
</body>
</html>