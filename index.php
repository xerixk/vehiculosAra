<?php

require_once "vehiculo.php";
require_once "coche.php";
require_once "moto.php";
echo "cargar index";
$coche1= new Coche("Opel","rojo",15000,4);
$moto1= new Moto("Yamaha","negro",15000,35);
$coche1= new Coche("Audi","rojo",15000,4);

echo "Datos coche1: Marca:".$coche1->marca."color: ". $coche1->color."Kilometros:". $coche1->kilometros;
$coche1->kilometros=11111111;
echo "Datos coche1: Marca:". $coche1->marca. "color: ". $coche1->color."Kilometros:". $coche1->kilometros." numero Puertas:".$coche1->numPuertas;

echo "numero de instancias de vehiculos: ".Vehiculo::getTotalVehiculos();

?>