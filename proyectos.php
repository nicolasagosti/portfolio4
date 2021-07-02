<?php 

$pg = "proyectos";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
     <link rel="shortcut icon" href="images/LG2.ico.ico" />
    <title>Proyectos</title>
</head>

<body id="proyecto">
 <?php include_once("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class=" col-12 ">
                <p>Los siguientes son algunos de los trabajos que he realizado</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-12 p-sm-4 px-2 py-2">
                <div class="row card ">
                    <div class="col-12 p-0">
                        <img src="images/abmclientes.png" href= alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-degradante py-3">
                        <h2 class="proyectosh2"> ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                            Bootstrap y Json.
                        </p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6 ">
                            <a href="http://localhost/php/abmclientes/" class="btn btn-rojo" target="_blank">Ver Online</a>
                        </div>
                        <div class="col-6   link-rojo text-center">
                            <a href="">codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 p-sm-4 px-2 py-2">
                <div class="row card ">
                    <div class="col-12 p-0">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-degradante py-3">
                        <h2 class="proyectosh2"> SISTEMA DE GESTIÓN DE VENTAS</h2>
                    </div>
                    <div class="col-12 py-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                        </p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6 ">
                            <a href="" class="btn btn-rojo" target="_blank">Ver Online</a>
                        </div>
                        <div class="col-6   link-rojo text-center">
                            <a href="">codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-12 p-sm-4 px-2 py-2">
                <div class="row card ">
                    <div class="col-12 p-0">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 color-degradante py-3">
                        <h2 class="proyectosh2"> PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 py-3 ">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines

                        </p>
                    </div>
                    <div class="row py-5">
                        <div class="col-6 ">
                            <a href="" class="btn btn-rojo" target="_blank">Ver Online</a>
                        </div>
                        <div class="col-6   link-rojo text-center">
                            <a href="">codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=2324528917" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>




</body>

</html>