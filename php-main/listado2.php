<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "Nombre" => "Smart TV 55\" 4K UHD",
    "Marca" => "hitachi",
    "Modelo" => "55usdf",
    "Stock" => 60,
    "Precio" => 56000
);
$aProductos[] = array(
    "Nombre" => "Samsung Galaxi A51",
    "Marca" => "samsung",
    "Modelo" => "SM-A125",
    "Stock" => 0,
    "Precio" => 22000
);
$aProductos[] = array(
    "Nombre" => "Honda invicta 150 CG",
    "Marca" => "Honda",
    "Modelo" => "invicta",
    "Stock" => 6,
    "Precio" => 200000
);
    $aProductos[] = array(
        "Nombre" => "Honda fz 250",
        "Marca" => "Honda",
        "Modelo" => "fz",
        "Stock" => 4,
        "Precio" => 240000
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
    <body>
        <main class="container">
            <div class="row">
                <div class="12-col text-center p5">   
                    <h1>LISTADO DE PRODUCTOS</h1>
                </div>
            </div>
           
            <div class="row">
                <div class="12-col">    
                </div>
            <div>
                <div class="row">
                <div class="12-col">   
                    <table class="table table_hover border">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acción</th>
                     </tr>
                    <tr>
                       
                    <?php
                     
                        $subtotal = 0;
                        for($i = 0; $i< count($aProductos); $i++){   
                            echo "<tr>";
                            echo "<td>" . $aProductos[$i]["Nombre"] . "</td>";
                            echo "<td>" . $aProductos[$i]["Marca"] . "</td>";
                            echo "<td>" . $aProductos[$i]["Modelo"] . "</td>";
                            echo "<td>" . $aProductos[$i]["Stock"] . "</td>";
                            echo "<td>" . $aProductos[$i]["Precio"] . "</td>";
                            echo "<td><button class='btn-primary'> comprar </button></td>";
                            echo "</tr>";
                            $subtotal += $aProductos[$i]["Precio"];
                       }
                              ?>
                             </tr>
                       
                    </table>
                     <h2>El subtotal es : <?PHP echo $subtotal; ?></h2>
                     </div>
                </div>
            </div>
        </main>
    </body>
</html>