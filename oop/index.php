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

echo '<br>Class Truck 1<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();

echo '<br>Class Truck 2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br><br>';

//$v1 = new \Vehicles\VehicleBase('Alex');
//$v1->move();
