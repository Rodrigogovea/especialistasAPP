<!DOCTYPE html>
<html>
<head>
    <title>Especialistas</title>
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
            <h1 class="display-4">Especialistas</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEspecialista">
                <span class="fas fa-user-plus"></span> Agregar especialista
            </button>
            <hr class="my-4">
            
            <div id="cargaTablaEspecialistas"></div>

        </div>
        <?php
			require_once "Vistas/Especialistas/modalAgregar.php";
			require_once "vistas/Especialistas/modalActualizar.php";
		?>
    </div>
    <script src="Public/js/Especialistas.js"></script>
</body>
</html>