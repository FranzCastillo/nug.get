<html>
<head>
        <meta charset="utf-8">
        <title> Publicar - nug.get </title>
        <!-- BOOTSTRAP IMPLEMENTATION-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!---->
        <link rel = "stylesheet" href = "css/stylesheet.css">

         <!-- Required meta tags-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">
        <!-- Vendor CSS-->
        <!-- Main CSS-->
        <link href="css/main.css" rel="stylesheet">
</head>

    <body>

    <div class="container-fluid" style="background-color:#FFBF69;height:150px;">
        <a href="index.html"><img src="images/nugget-logo.png" width="500" height="130"></a>
        </div>
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="200">
            <ul class="nav navbar-nav">
            <li><a href="index.html">Inicio</a></li> 
            <li><a href="solicitar.html">Solicitar</a></li> <!-- Cambiar la extension al momento de implementar php-->
            <li><a href="ofrecer.html">Ofrecer</a></li>
            <li class="active"><a href="form.php">Publicar</a></li>
            </ul>
        </nav>

    <div class="container-fluid" style="height:1000"> 
    <!--AQUI VA TODO EL CONTENIDO DE LA PAGINA-->

        <div class="page-wrapper p-t-45 p-b-50" style="background-color:#2ec4b6;">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title" STYLE="text-transform:capitalize">Ingrese sus datos</h2>
                    </div>
                    <div class="card-body">
                        <form action="form.php" method="POST" enctype="multipart/form-data">

                            <div class="form-row">
                                <div class="name">Usuario</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="usuario">
                                        </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Título</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="titulo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Descripción</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" size="100" type="text" name="descripcion">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Link de la imagen</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="foto">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row p-t-20">
                                <label class="label label--block">Que desea hacer?</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">Solicitar
                                        <input type="radio" checked="checked" name="opcion">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Ofrecer
                                        <input type="radio" name="opcion">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn--radius-2" style="background-color:#FF9F1C;" type="submit" name="enviar">Publicar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>     
      
    <!-- AQUÍ TERMINA -->    
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="js/global.js"></script>

    </body>

</html>

<?php

?>