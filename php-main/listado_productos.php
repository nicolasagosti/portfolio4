<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[0] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "hitachi",
    "modelo" => "55usdf",
    "stock" => 60,
    "precio" => 56000
);
$aProductos[1] = array(
    "nombre" => "Samsung Galaxi A51",
    "marca" => "samsung",
    "modelo" => "SM-A125",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[2] = array(
    "nombre" => "Honda invicta 150 CG",
    "marca" => "Honda",
    "modelo" => "invicta",
    "stock" => 5,
    "precio" => 200000
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
                    <table class="table table_hover border ">
                    <tr>
                        <th>nombre</th>
                        <th>marca</th>
                        <th>modelo</th>
                        <th>stock</th>
                        <th>precio</th>
                        <th>accion</th>
                     </tr>
                        <tbody>
                        <tr>
                            <td><?php echo $aProductos[0]["nombre"]?></td>
                            <td><?php echo $aProductos[0]["marca"]?></td>
                            <td><?php echo $aProductos[0]["modelo"]?></td>
                            <td><?php echo $aProductos[0]["stock"]== 0 ? "no hay stock" : ($aProductos[0]["stock"]<10 ? "hay poco stock" : "hay mucho stock");?></td>
                            <td>$<?php echo $aProductos[0]["precio"]?></td>
                            <td><button class="btn btn-primary">comprar</td></button> 
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[1]["nombre"]?></td>
                            <td><?php echo $aProductos[1]["marca"]?></td>
                            <td><?php echo $aProductos[1]["modelo"]?></td>
                            <td><?php echo $aProductos[1]["stock"]== 0 ? "no hay stock" : ($aProductos[1]["stock"]<10 ? "hay poco stock" : "hay mucho stock");?></td>
                            <td>$<?php echo $aProductos[1]["precio"]?></td>
                            <td><button class="btn btn-primary">comprar</td></button> 
                        </tr>
                        <tr>
                            <td><?php echo $aProductos[2]["nombre"]?></td>
                            <td><?php echo $aProductos[2]["marca"]?></td>
                            <td><?php echo $aProductos[2]["modelo"]?></td>
                            <td><?php echo $aProductos[2]["stock"]== 0 ? "no hay stock" : ($aProductos[2]["stock"]<10 ? "hay poco stock" : "hay mucho stock");?></td>
                            <td>$<?php echo $aProductos[2]["precio"]?></td>
                            <td><button class="btn btn-primary">comprar</td></button> 
                        </tr>
                    
                    
                    
                    </tbody>
                    </table>
                </div>
            </div>
        </main>
    </body>
</html>