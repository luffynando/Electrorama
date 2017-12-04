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
<div id="holder">
    <div id="header">
        <div class="container">
            <header>
                <nav id='cssmenu'>
                <div class="logo"><a href="#">MENÚ</a></div>
                <div id="head-mobile"></div>
                <div class="button"></div>
                <ul>
                    <li><a href="index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li><a href="aplicacion.php"><i class="fa fa-microchip fa-lg"></i> Aplicacion</a></li>
                    <li><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i> Ayuda</a></li>
                    <li class="active"><a href="acerca.php"><i class="fa fa-info-circle fa-lg"></i> Acerca de</a></li>
                </ul>
                </nav>
            </header>
        </div>
    </div>
    <div id="body">
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-6 cuadro">
                        <div class="titulo text-center">
                            <h3 style="margin-bottom:  25px;">Acerca de</h3>
                        </div>
                        <div class="col-md-3">
                            <img src="imagenes/icono1.png" class="rounded" alt="...">
                        </div>
                        <div class="col-md-9">
                            <p><strong>Aplicaciones Web.</strong><p/>
                            <p><strong>Electrorama V 0.1.</strong><p/>
                            <p>Alejandro Ramirez Guzman</p>
                            <p>Fernando Isidro Luna</p> 
                            <p>Citlalli Serrano Perez</p> 
                            <p>Yazmin Francisco Lopez</p>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>