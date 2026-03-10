<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehiculeInterface;

CONST BICYCLE = 0;
CONST CAR = 1;
CONST TRUCK = 2;

class VehiculeFactory {
    public function getVehiculeByName(string $name): VehiculeInterface {
        switch ($name) {
            case BICYCLE :
                echo "Velo créé <br>";
                return new Bicycle(10, null);
            case CAR :
                echo "Voiture créée <br>";
                return new Car(100, 'diesel');
            case TRUCK :
                echo "Camion créé <br>";
                return new Truck(150, 'diesel');
            default:
                return new Bicycle(10, null);
        }
    }

    public function getVehicule(int $distance, int $weight): VehiculeInterface {
        if (($distance < 20)&&($weight < 20)) {
            echo "Velo créé <br>";
            return new Bicycle(10, null);
        } else {
            if ($weight < 200) {
                echo "Voiture créée <br>";
                return new Car(100, 'diesel');
            } else {
                echo "Camion créé <br>";
                return new Truck(150, 'diesel');
            }
        }
    }
}