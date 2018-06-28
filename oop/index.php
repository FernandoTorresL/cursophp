<?php 

include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Car, Truck};

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>Class Truck<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner() . '<br><br>';