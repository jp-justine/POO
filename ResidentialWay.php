<?php
require_once 'HighWay.php';
final class ResidentialWay extends HighWay {

    public function __construct($nbLane = 2, $maxSpeed = 50)
    {         
        parent::__construct($nbLane, $maxSpeed);     
    }
    public function addVehicle(Vehicle $vehicle): string
        {            
            $answer = "This vehicle is allowed on the residential way ";  
            return $answer;         
        }
}