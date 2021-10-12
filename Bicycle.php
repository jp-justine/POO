<?php

class Bicycle
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;
    
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
        $this->currentSpeed = $currentSpeed;
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    
}


class Cars 
{

private int $nbWheels;
private int $currentSpeed;
private string $color;
private int $nbSeets;
private string $energyType;
private int $energyLevel;

public function __construct(string $color, int $nbSeets,string $energyType)
{
    $this->color = $color;
    $this->nbSeets = $nbSeets;
    $this->energyType = $energyType;
}
public function start(): string
{
    $this->currentSpeed = 0;
    
    return ""; 
}
public function forward(): string
    {
        $this->currentSpeed = 90;
    
        return "Let's go !";
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
        $this->currentSpeed = $currentSpeed;
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}