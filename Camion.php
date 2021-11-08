<?php
require_once 'Vehicle.php';

class Camion extends Vehicle
{
    private int $stockage;
    private int $charge = 0;

    /**
     * Get the value of stockage
     *
     * @return int
     */
    public function getStockage(): int
    {
        return $this->stockage;
    }

    /**
     * Set the value of stockage
     *
     * @param int $stockage
     *
     * @return self
     */
    public function setStockage(int $stockage): self
    {
        $this->stockage = $stockage;

        return $this;
    }

    /**
     * Get the value of charge
     *
     * @return int
     */
    public function getCharge(): int
    {
        return $this->charge;
    }

  


    /**
     * Set the value of charge
     *
     * @param int $charge
     *
     * @return self
     */
    public function setCharge(int $charge): self
    {
        $this->charge = $charge;

        return $this;
    }
}