<?php
$bruto = 50000;
function calcularNeto($bruto){
   return $bruto - $bruto*0.17;
}
echo (calcularNeto($bruto));


?>