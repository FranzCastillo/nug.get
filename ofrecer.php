<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- BOOTSTRAP IMPLEMENTATION-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!---->
        <title>Solicitar - nug.get</title>
        <link rel = "stylesheet" href = "css/stylesheet.css">
    </head>
    <body>
        <div class="container-fluid" style="background-color:#343a40;height:150px;">
            <a href="index.html"><img src="images/nugget-logo-white.png" width="500" height="130"></a>
        </div>
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
            <ul class="nav navbar-nav">
            <li><a href="index.html">Inicio</a></li> 
            <li><a href="solicitar.php">Solicitar</a></li> <!-- Cambiar la extension al momento de implementar php-->
            <li class="active"><a href="ofrecer.php">Ofrecer</a></li>
            <li><a href="form.php">Publicar</a></li>
            </ul>
        </nav>
        <div class="container-fluid" style="height:1000"> <!--AQUI VA TODO EL CONTENIDO DE LA PAGINA-->
            <?php
                include 'Tablas.php';
                include 'tablaOfrecer.php';
                include 'Vista.php';
                $ofrecer = new tablaOfrecer();
                $ingresos =  $ofrecer->obtenerIngresos();

                $vista = new Vista();
                $vista -> mostrarPublicaciones($ingresos);
                $vista -> separar();
            ?>
        </div>
    </body>
</html>