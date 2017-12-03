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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Seccion favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">
    <!-- end-->
</head>
<body>
<div class="container">
    <header>
        <nav id='cssmenu'>
            <div class="logo"><a href="#">MENÚ</a></div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                <li><a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                <li><a href="aplicacion.php"><i class="fa fa-microchip fa-lg"></i> Aplicacion</a></li>
                <li class="active"><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i> Ayuda</a></li>
                <li><a href="acerca.php"><i class="fa fa-info-circle fa-lg"></i> Acerca de</a></li>
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
<footer class="navbar navbar-fixed-bottom">
<div class="footer-basic-centered">
        <p class="footer-company-name">Proyecto Aplicaciones Web &copy; 2017</p>
</div>
</footer>
</body>
</html>