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
    <header>

        <nav class="navbar navbar-expand-md  mb-4 ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-1">
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4  py-1 " href="contactos.php">Contacto</a>
                        </li>

                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Decargar mi CV <i class="fas fa-download"></i></a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

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
    <footer class="cotainer">
        <div class="row mt-5">
            <div class="col-12 col-sm-3  text-center ">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/nicol%C3%A1s-agosti-397903181/" target="_blank" title="Linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3  text-center  pt-3 p-sm-0 " >
                sponsor <a href="https://depcswite.com" target="_blank" title="depc suite">depc suite</a>
            </div>
            <div class="col-4 col-sm-3  text-center ">
             <a href="mailto:info@depcswite.com">agostinicolas6557@gmail.com</a>
            </div>
        </div>
        
    </footer>
    <div class="whatsapp">
        <a href="http://api.whatsapp.com/send?phone=2324528917" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>


</html>