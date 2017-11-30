<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/generador.js"></script>



    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_ayuda.css">
</head>
<body>
<div class="container">
    <header>
        <nav id='cssmenu'>
            <div class="logo"><a href="index.php">MENÚ</a></div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                <li class='active'><a href='index.php'>INICIO</a></li>
                <li><a href='aplicacion.php'>APLICACIÓN</a></li>
                <li><a href='ayuda.php'>AYUDA</a></li>
                <li><a href='acerca.php'>ACERCA DE</a></li>
            </ul>
        </nav>
    </header>
</div>
<br><br><br><br>
<div class="container">
    <div class="row ">
        <div class="col-md-5 col-md-offset-3">
            <div class="form-area">
                <form method="post" action="enviar.php">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contáctanos</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Éscribe tu nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Éscribe tu correo" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Éscribe tu telefono" required>
                    </div>
                    <div class="form-group">
                        <textarea id="comentario" placeholder="Escribe aquí tus comentarios" rows="5" cols="51" required></textarea>
                    </div>
                    <input type="submit" value="Enviar" id="boton" name="boton" class="btn btn-primary pull-right">

                </form>
            </div>
        </div>
    </div>
</div>