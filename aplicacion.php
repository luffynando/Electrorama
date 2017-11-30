<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memorama</title>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/generador.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_aplicacion.css">

    <script>

        vectorImage =new Array(37);
        var valor1=0;
        var valor2=0;
        var turno=0;

        function CargaAleatoria(){
            var i=0;


            for(i=0;i<19;i++){
                vectorImage[i]=i+".PNG";
            }
            var k=1;
            for(i=19;i<37;i++){
                vectorImage[i]=k+".PNG";
                k++;
            }
            //intercambio
            var aux="";
            for(i=1;i<37;i++){
                var aleatorio =Math.round(Math.random()*36)+1;
                aux =vectorImage[i];
                vectorImage[i]=vectorImage[aleatorio];
                vectorImage[aleatorio]=aux;

            }
            for(i=1;i<37;i++){
                document.getElementById(i+"a").src="imagenes/"+vectorImage[i];
                console.log(vectorImage[i]);
            }
        }
        function limpiar(){
            for(i=1;i<37;i++){
                document.getElementById(i+"a").src="imagenes/0.PNG";
            }
        }
        function evento(valor){

            var respuestas = [
                "",
                "Condensador electrolítico: es un tipo de condensador que usa un líquido iónico conductor.",
                "Capacitor cerámico: Este tipo de capacitores empleados, usualmente a base de dióxido de titanio o titanato de calcio con aditivos.",
                "Diodo: Dispositivo electrónico de dos electrodos por el que circula la corriente en un solo sentido.",
                "Transistor: dispositivo electrónico semiconductor utilizado para entregar una señal de salida en respuesta a una señal de entrada.",
                "Led: diodo emisor de luz’, que es un tipo de diodo empleado en computadoras, paneles numéricos",
                "Fusible: Componente eléctrico hecho de un material conductor, generalmente estaño, que se coloca en un punto del circuito eléctrico para interrumpir la corriente cuando esta es excesiva.",
                "Transformador:Aparato que sirve para transformar la tensión de una corriente eléctrica alterna sin modificar su potencia.",
                "Potenciometro:  capaz de inyectar corriente en un punto intermedio de su elemento resistivo.",
                "Resistencia: componente electrónico diseñado para introducir una resistencia eléctrica determinada entre dos puntos de un circuito.",
                "Bateria: dispositivo que consiste en una o más celdas electroquímicas que pueden convertir la energía química almacenada en electricidad.",
                "Fototransistor: Sensible a la luz, normalmente a los infrarrojos. La luz incide sobre la región de base, generando portadores en ella. Esta carga de base lleva el transistor al estado de conducción.",
                "Diac: (Diodo para Corriente Alterna) es un dispositivo semiconductor doble de dos conexiones.",
                "Triac:Triodo para Corriente Alterna es un dispositivo semiconductor, de la familia de los tiristores. La diferencia con un tiristor convencional es que éste es unidireccional y el TRIAC es bidireccional.",
                "Relay: dispositivo electromecánico . Funciona como un interruptor controlado por un circuito eléctrico en el que, por medio de una bobina y un electro imán, se acciona un juego de uno o varios contactos.",
                "Interruptor: Dispositivo para abrir o cerrar el paso de corriente eléctrica en un circuito.",
                "Motor: máquina capaz de hacer funcionar el sistema, transformando algún tipo de energía (eléctrica, de combustibles fósiles, etc.), en energía mecánica capaz de realizar un trabajo.",
                "Bocina: Instrumento sonoro consistente en una pieza rígida en forma de embudo unida a una pera de goma y con una lengüeta vibratoria en la unión de ambas partes",
                "Buzzer: roduce un sonido o zumbido continuo o intermitente de un mismo tono (generalmente agudo). Sirve como mecanismo de señalización o aviso."
            ];

            var valores = eval(respuestas);
            var x   = valores[0];
            var a1   = valores[1];
            var a2   = valores[2];
            var a3   = valores[3];
            var a4  = valores[4];
            var a5   = valores[5];
            var a6  = valores[6];
            var a7  = valores[7];
            var a8  = valores[8];
            var a9   = valores[9];
            var a10   = valores[10];
            var a11   = valores[11];
            var a12   = valores[12];
            var a13  = valores[13];
            var a14   = valores[14];
            var a15   = valores[15];
            var a16   = valores[16];
            var a17   = valores[17];
            var a18   = valores[18];




            console.log(a1);

            if(turno==0){
                valor1=valor;
                turno=1;
                document.getElementById(valor1+"a").src="imagenes/"+vectorImage[valor1];

            }else{
                valor2=valor;
                turno=0;
                document.getElementById(valor2+"a").src="imagenes/"+vectorImage[valor2];
                console.log(vectorImage[valor1]);
                console.log(vectorImage[valor2]);
                if(vectorImage[valor1]==vectorImage[valor2]){
                    if(vectorImage[valor1].length==5){
                        var num =vectorImage[valor1].substr(0,1);
                        if(num==1){
                            alert(a1);
                        }
                        if(num==2){
                            alert(a2);
                        }
                        if(num==3){
                            alert(a3);
                        }
                        if(num==4){
                            alert(a4);
                        }
                        if(num==5){
                            alert(a5);
                        }
                        if(num==6){
                            alert(a6);
                        }
                        if(num==7){
                            alert(a7);
                        }
                        if(num==8){
                            alert(a8);
                        }
                        if(num==9){
                            alert(a9);
                        }
                        if(num==10){
                            alert(a10);
                        }
                        if(num==11){
                            alert(a11);
                        }
                        if(num==12){
                            alert(a12);
                        }
                        if(num==13){
                            alert(a13);
                        }
                        if(num==13){
                            alert(a13);
                        }
                        if(num==14){
                            alert(a14);
                        }
                        if(num==15){
                            alert(a15);
                        }
                        if(num==16){
                            alert(a16);
                        }
                        if(num==17){
                            alert(a17);
                        }
                        if(num==18){
                            alert(a18);
                        }
                    }
                    if(vectorImage[valor1].length==6){
                        var num =vectorImage[valor1].substr(0,2);
                        if(num==1){
                            alert(a1);
                        }
                        if(num==2){
                            alert(a2);
                        }
                        if(num==3){
                            alert(a3);
                        }
                        if(num==4){
                            alert(a4);
                        }
                        if(num==5){
                            alert(a5);
                        }
                        if(num==6){
                            alert(a6);
                        }
                        if(num==7){
                            alert(a7);
                        }
                        if(num==8){
                            alert(a8);
                        }
                        if(num==9){
                            alert(a9);
                        }
                        if(num==10){
                            alert(a10);
                        }
                        if(num==11){
                            alert(a11);
                        }
                        if(num==12){
                            alert(a12);
                        }
                        if(num==13){
                            alert(a13);
                        }
                        if(num==13){
                            alert(a13);
                        }
                        if(num==14){
                            alert(a14);
                        }
                        if(num==15){
                            alert(a15);
                        }
                        if(num==16){
                            alert(a16);
                        }
                        if(num==17){
                            alert(a17);
                        }
                        if(num==18){
                            alert(a18);
                        }


                    }


                }else{
                    alert("diferentes");
                    document.getElementById(valor1+"a").src="imagenes/0.PNG";
                    document.getElementById(valor2+"a").src="imagenes/0.PNG";
                }
            }
        }
    </script>
</head>
<body>
<div class="container">
    <header>
        <nav id='cssmenu'>
            <div class="logo"><a href="#">MENÚ</a></div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                <li class="active"><a href="index.html"><i class="fa fa-home fa-lg"></i> Home</a></li>
                <li><a href="aplicacion.php"><i class="fa fa-microchip fa-lg"></i> Aplicacion</a></li>
                <li><a href="ayuda.php"><i class="fa fa-question-circle fa-lg"></i> Ayuda</a></li>
                <li><a href="acerca.php"><i class="fa fa-info-circle fa-lg"></i> Acerca de</a></li>
            </ul>
        </nav>
    </header>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4 text-center"><br><br>
                <form action="">
                    <h5 style="margin-bottom: 25px;">¡Oprima el botón cargar, después oprima el botón limpiar y disfrute del Electrograma!</h5>
                    <table border="2">
                        <tr>
                            <td><img src="imagenes/0.PNG" id="1a" alt="0" onclick="evento('1');"/></td>
                            <td><img src="imagenes/0.PNG" id="2a" alt="0" onclick="evento('2');"/></td>
                            <td><img src="imagenes/0.PNG" id="3a" alt="0" onclick="evento('3');"/></td>
                            <td><img src="imagenes/0.PNG" id="4a" alt="0" onclick="evento('4');"/></td>
                            <td><img src="imagenes/0.PNG" id="5a" alt="0" onclick="evento('5');"/></td>
                            <td><img src="imagenes/0.PNG" id="6a" alt="0" onclick="evento('6');"/></td>


                        </tr>
                        <tr>
                            <td><img src="imagenes/0.PNG" id="7a" alt="0" onclick="evento('7');"/></td>
                            <td><img src="imagenes/0.PNG" id="8a" alt="0" onclick="evento('8');"/></td>
                            <td><img src="imagenes/0.PNG" id="9a" alt="0" onclick="evento('9');"/></td>
                            <td><img src="imagenes/0.PNG" id="10a" alt="0" onclick="evento('10');"/></td>
                            <td><img src="imagenes/0.PNG" id="11a" alt="0" onclick="evento('11');"/></td>
                            <td><img src="imagenes/0.PNG" id="12a" alt="0" onclick="evento('12');"/></td>


                        </tr>
                        <tr>
                            <td><img src="imagenes/0.PNG" id="13a" alt="0" onclick="evento('13');"/></td>
                            <td><img src="imagenes/0.PNG" id="14a" alt="0" onclick="evento('14');"/></td>
                            <td><img src="imagenes/0.PNG" id="15a" alt="0" onclick="evento('15');"/></td>
                            <td><img src="imagenes/0.PNG" id="16a" alt="0" onclick="evento('16');"/></td>
                            <td><img src="imagenes/0.PNG" id="17a" alt="0" onclick="evento('17');"/></td>
                            <td><img src="imagenes/0.PNG" id="18a" alt="0" onclick="evento('18');"/></td>


                        </tr>
                        <tr>
                            <td><img src="imagenes/0.PNG" id="19a" alt="0" onclick="evento('19');"/></td>
                            <td><img src="imagenes/0.PNG" id="20a" alt="0" onclick="evento('20');"/></td>
                            <td><img src="imagenes/0.PNG" id="21a" alt="0" onclick="evento('21');"/></td>
                            <td><img src="imagenes/0.PNG" id="22a" alt="0" onclick="evento('22');"/></td>
                            <td><img src="imagenes/0.PNG" id="23a" alt="0" onclick="evento('23');"/></td>
                            <td><img src="imagenes/0.PNG" id="24a" alt="0" onclick="evento('24');"/></td>


                        </tr>
                        <tr>
                            <td><img src="imagenes/0.PNG" id="25a" alt="0" onclick="evento('25');"/></td>
                            <td><img src="imagenes/0.PNG" id="26a" alt="0" onclick="evento('26');"/></td>
                            <td><img src="imagenes/0.PNG" id="27a" alt="0" onclick="evento('27');"/></td>
                            <td><img src="imagenes/0.PNG" id="28a" alt="0" onclick="evento('28');"/></td>
                            <td><img src="imagenes/0.PNG" id="29a" alt="0" onclick="evento('29');"/></td>
                            <td><img src="imagenes/0.PNG" id="30a" alt="0" onclick="evento('30');"/></td>

                        </tr>
                        <tr>
                            <td><img src="imagenes/0.PNG" id="31a" alt="0" onclick="evento('31');"/></td>
                            <td><img src="imagenes/0.PNG" id="32a" alt="0" onclick="evento('32');"/></td>
                            <td><img src="imagenes/0.PNG" id="33a" alt="0" onclick="evento('33');"/></td>
                            <td><img src="imagenes/0.PNG" id="34a" alt="0" onclick="evento('34');"/></td>
                            <td><img src="imagenes/0.PNG" id="35a" alt="0" onclick="evento('35');"/></td>
                            <td><img src="imagenes/0.PNG" id="36a" alt="0" onclick="evento('36');"/></td>

                        </tr>

                    </table>
                    <div>
                        <br>
                        <input class="btn btn-primary" type="button" value="Cargar" onclick="CargaAleatoria()">
                        <input class="btn btn-primary" type="button" value="Limpiar" onclick="limpiar()">
                    </div>
                    <div>

                    </div>


                </form>
            </div>

    </div>
</div>


</body>
</html>