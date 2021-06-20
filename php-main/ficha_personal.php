<?php
$fecha =  date("d/m/Y");
$nombre = "nicolas agosti";
$edad = 22;
$apeliculas =  array("contra tiempo", "el origen", "it");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta href="boost">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>el trabajo del cuadro</title>
  
  
</head>


<body>
<main class="container">
<div class="row"></div>
<div class="col-12 text-center py-5"></div>


<h1>ficha personal</h1>
    <tbody>
    </div class="row m-5">
<div class="col12"></div>
    <main class="container">
<table class="table table-hover border , margin=">
    <div class="container px3 ps-sm5"></div>
<span class="border" background-color:red;></span>
         <tr>
             <th>fecha</th>
             <td><?php echo $fecha; ?></td>
         </tr>
         <tr>
            <th>nombre y apellido</th>
            <td><?php echo $nombre; ?></td> 
            </tr>
                <tr>
            <th>edad</th>
            <td><?php echo 43; ?> </td>
            </tr>
            
        </tr>
        <tr>
            <th>peliculas favoritas</th>
            <td><?php echo $apeliculas[0] ?><br>
              <?php echo $apeliculas[1] ?><br>
              <?php echo $apeliculas[2] ?>
             </td>
            
        </tr>



</tbody>
</body>
</html>