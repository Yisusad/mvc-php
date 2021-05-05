<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--JAVASCRIPT -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
    <title>MVC</title>

</head>
<body>

    <!--Logo-->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!--Botonera-->
    <div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">

            <?php if(isset($_GET["pagina"])): ?>
                <?php if($_GET["pagina"]=="registro"): ?>
                    <li class="nav-item">
					    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
				    </li>
                <?php else: ?>
                    <li class="nav-item">
					    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
				    </li>    
                <?php endif ?>

                <?php if($_GET["pagina"]=="ingreso"): ?>
                    <li class="nav-item">
					    <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
				    </li>
                <?php else: ?>
                    <li class="nav-item">
					    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
				    </li>
                <?php endif ?>

                <?php if($_GET["pagina"]=="inicio"): ?>
                    <li class="nav-item">
					    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
				    </li>
                <?php else: ?>
                    <li class="nav-item">
					    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
				    </li>
                <?php endif ?>

                <?php if($_GET["pagina"]=="salir"): ?>
                    <li class="nav-item">
					    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
				    </li>
                <?php else: ?>
                    <li class="nav-item">
					    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
				    </li>
                <?php endif ?>
            <?php else: ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</I>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</S>
                </li>

            <?php endif ?>

			</ul>

		</div>

	</div>

    <!--Contenido-->

    <div class="container-fluid">
		
		<div class="container py-5">

			<?php

                if(isset($_GET["pagina"])){
                    if($_GET["pagina"]== "registro" || $_GET["pagina"]== "ingreso"  ||
                       $_GET["pagina"]== "inicio"  || $_GET["pagina"]== "salir"
                    ){
                        include "paginas/" .$_GET["pagina"]. ".php";
                    }
                    else{
                        include "paginas/error404.php";
                    }  
                }
                else{
                    include "paginas/registro.php";
                }    
            ?>

		</div>

	</div>
    
</body>
</html>