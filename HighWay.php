<?php

abstract class HighWay {
    
    protected array $currentVehicles=[];
    protected int $nbLane;
    protected int $maxSpeed;
        
    abstract public function addVehicle(Vehicle $vehicle);

    public function __construct(int $nbLane, int $maxSpeed){
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * Get the value of currentVehicles
     *
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @param array $currentVehicles
     *
     * @return self
     */
    public function setCurrentVehicles(array $currentVehicles): self
    {
        
    }
   

    /**
     * Get the value of nbLane
     *
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @param int $nbLane
     *
     * @return self
     */
    public function setNbLane(int $nbLane): self
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     *
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @param int $maxSpeed
     *
     * @return self
     */
    public function setMaxSpeed(int $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}