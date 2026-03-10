<?php

use App\Factory\VehiculeFactory;
use const App\Factory\CAR;

require('../vendor/autoload.php');

$vf = new VehiculeFactory();
echo "getVehiculeByName(CAR); <br>";
$vf->getVehiculeByName(CAR);
echo "getVehicule(10,50); <br>";
$vf->getVehicule(10,50);
echo "getVehicule(5,0); <br>";
$vf->getVehicule(5,0);
echo "getVehicule(150,20); <br>";
$vf->getVehicule(150,20);
echo "getVehicule(15,250); <br>";
$vf->getVehicule(15,250);