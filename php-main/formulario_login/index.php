 <?php
if ($_POST){
    print_r($_REQUEST);

$usuario = $_REQUEST["txtUsuario"];
$clave = $_REQUEST["txtClave"];
if ($usuario != "" && $clave != ""){
header("Location:acceso-confirmado.php");
} else {
    "valido para usuarios registrados";
}



}

?>







<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row"> 
        <div class="12-col">
          <form action="" method="POST">
        <div class=mb-3>
        </div>
        </div>
        </div>
        <div></div>
    <input type="text" id="txtNombre" name="textNombre" placeholder="Nombre">
                            
        
        <div>

            <input type="password" id="txtclave" name="contraseña" placeholder="password">
               

        </div>
    
    
    

        <div>
                        <button id="btnEnviar" name="btnEnviar" class="btn btn-primary">Enviar</button>

        </div>

    
    
    </main>
</body>
</html>