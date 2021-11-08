<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay {


    public function __construct($nbLane = 1, $maxSpeed = 10)
    {         
        parent::__construct($nbLane, $maxSpeed);     
    }
    public function addVehicle(Vehicle $vehicle)
    {        
        if($vehicle instanceof Bycicle)
        {            
            $this->currentVehicles [] = $vehicle;            
            $answer = "This vehicles are allowed on the pdedestrian way";        
            return $answer;     
        }
    }
}