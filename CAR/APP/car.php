<?php

namespace marek\car;

/**
 * 
 * 
 * @author Marek <marek.stolz019@skolavdf.cz>
 * @copyright 2022 
 */

class Car extends Vehicle
{

    /**
     * Car torque
     *
     * @var int
     */
    public $torque;

    /**
     * Car speed
     *
     * @var int
     */
    public $speed;

     /**
     * Damage that car can take
     *
     * @var int
     */
    protected $hp;

     /**
     * car constructor
     *
     * @param int perfomance
     * @param int healt points
     */
    public function __construct(int $speed, int $torque, int $hp)
    {
        $this->setHp($hp);
        $this->performance($torque, $speed);
    }
    /**
     * Calcualte performance of vehicle
     *
     * @param int $torque 
     * @param int $speed
     */
    public function performance(int $torque, float $speed)
    {
       return $this->$torque * $speed
    }

     /**
     * Get vehicle health
     *
     * @return int 
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * Set vehicle health
     *
     * @param int  $hp  vehicle health points
     * @return void
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp > 0 ? $hp : 0;
    }

  }