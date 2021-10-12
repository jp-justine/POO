<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);


$bike->setCurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'Km/h' . '<br>';
echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo '</br>';
echo '</br>';

$cars = new cars('green',4,'electricity');
var_dump($cars);

$cars->setCurrentSpeed(15);

echo $cars->start();
echo '<br> Vitesse de la voiture: ' . $cars->getCurrentSpeed() . 'Km/h' . '<br>';
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';