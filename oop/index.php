<?php 

include 'Vehicles/Car.php';
include 'Vehicles/Truck.php';
include 'Vehicles/ToyCar.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Car, Truck, ToyCar};

//interface MyInterface {
//    public function method1();
//}

try {
    echo 'Class ToyCar<br>';
    $toycar = new ToyCar('Alex');
    $toycar->move();
    //echo 'Owner car: ' . $car->getOwner() . '<br>';
} catch (Exception $e) {
    echo 'This is a toy<br>';
    //log...
} finally {
    echo 'finally<br><br>';
}

echo 'Class Car<br>';
$car = new Car('Alex');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';
echo 'GPS pos: ' . $car->getPos();

echo '<br>Class Truck 1<br>';
$truck = new Truck('Max', 'Pickup');
$truck->move();

echo '<br>Class Truck 2<br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo '<br>Total Trucks: ' . Truck::getTotal() . '<br><br>';

//$v1 = new \Vehicles\VehicleBase('Alex');
//$v1->move();

echo 'var_dump($car): ';
var_dump($car);
echo '<br>';
$ser = serialize($car);

echo 'var_dump(ser): ';
var_dump($ser);
echo '<br>';
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';