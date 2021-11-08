<?php

require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Camion.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$bicycle->setCurrentSpeed(0);

echo $bicycle->forward();
echo '<br> Vitesse de bicycle : ' . $bicycle->getCurrentSpeed() . 'Km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse de bicycle : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo '</br>';
echo '</br>';

$car = new car('green',4,'electricity');
echo $car->forward();
var_dump($car);

$car->setCurrentSpeed(15);

echo $car->forward();
echo '<br> Vitesse de car : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de car : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo '</br>';
echo '</br>';

$camion = new Camion('blue',4,10,5);
echo $camion->forward();
var_dump($camion);


echo $camion->forward();
echo '<br> Vitesse de camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse de camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';

$motor = new MotorWay(4, 130);
$pedestrian = new PedestrianWay(1, 10);
$residential = new ResidentialWay(2, 50);

$voiture = new Car("blue", 5, "fuel");
$bike = new Bicycle("blue", 1);

echo '</br>';
echo '</br>';

echo $motor->addVehicle($voiture);
