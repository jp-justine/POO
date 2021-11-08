<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle
{  

    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats = 1;

    protected int $nbWheels = 2;
    
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
    
        return "Go !";
    }
    
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed): void
    {
        
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    

}



