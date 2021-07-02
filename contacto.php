<?php

$pg = "contacto";

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
    <title>Contactos</title>

</head>

<body id="contacto">
   <?php include_once("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que me contactes enviame un mensaje o bien por 
                <a href="https://api.whatsapp.com/send?phone=2324528917">whatsapp</a></p>
            </div>
            <div class="col-sm-6 col-12 ">
                <form action="" method="POST">
                    <div>

                        <input type="text" id="txtNombre" name="textNombre" placeholder="Nombre"
                            class="form-control  mb-3 shadow border-white">

                    </div>
                    <div>

                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo"
                            class="form-control  mb-3 shadow border-white">

                    </div>
                    <div>

                        <input type="tel" id="txtTelefono" name="txtTelefono" placeholder="Telefono/whatapp "
                            class="form-control   mb-3 shadow border-white">
                    </div>

                    <div>

                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control border-white shadow"></textarea>

                    </div>
                    <div>
                        <button id="btnEnviar" name="btnEnviar" class="btn  mt-3 px-4">Enviar</button>

                    </div>
                  </form>
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