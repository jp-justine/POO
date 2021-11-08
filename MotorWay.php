<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay {

    public function __construct($nbLane = 4 , $maxSpeed = 130)
    {         
        parent::__construct($nbLane, $maxSpeed);     
    }
    public function addVehicle(Vehicle $vehicle): string
    {
        $answer = "This vehicle is not allowed on the motor way"; 
        
        if($vehicle instanceof Car || $vehicle instanceof Camion)
        {            
            $this->currentVehicles [] = $vehicle;            
            $answer = "This vehicle is allowed on the motor way";        
        }
        return $answer;     
     
    }
}