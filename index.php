<?php

require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Camion.php';


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

// $camion->setCurrentSpeed(15);
// $camion->setStockage(10);

echo $camion->forward();
echo '<br> Vitesse de camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse de camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';

// $truck = new Camion('blue',8,'electricity');
// echo $truck->forward();
// var_dump($truck);

// $truck->setCurrentSpeed(15);

// echo $truck->forward();
// echo '<br> Vitesse de truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
// echo $truck->brake();
// echo '<br> Vitesse de truck : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';