<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados[] = array();
$aEmpleados[] = array(
   "dni" => 38594736,
   "nombre" => "Daniel",
   "bruto" => 85000
);
$aEmpleados[] = array(
   "dni" => 48376506,
   "nombre" => "Agustin",
   "bruto" => 85000
);
$aEmpleados[] = array(
   "dni" => 41828743,
   "nombre" => "Nicolàs",
   "bruto" => 100000
);
$aEmpleados[] = array(
   "dni" => 434467845,
   "nombre" => "Sergio",
    "bruto" => 80000
);
  








?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Listado de empleados</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
   <body>
      <tbody>
      <main class="container">
         <div class="row"> 
            <div class="12-col text-center p5">
               <h1>LISTA DE EMPLEADOS</h1>
            </div>
        
         <div class="row">
            <div class="12-col text-center p5">
               <table class="table table-hover border">   
               <tr>
                  <th>DNI</th>
                  <th>NOMBRE</th>
                  <th>SUELDO</th>


                  
               </tr>
            <tr>
            <?php
               foreach($aEmpleados as $empleado) {
                  ?>
              
                 <tr>
                     <td> <?php echo $empleado["dni"] ?></td>
                     <td> <?php echo strtoupper($aEmpleado["nombre"]) ?> </td>
                     <td> <?php echo calcularneto($empleado["bruto"]) ?> </td>
                 </tr>
            <?php } ?>
                 
               
                 
                     </tr>
                  </table>
                </tbody>
            </div>
      </main>
   </body>
</html>