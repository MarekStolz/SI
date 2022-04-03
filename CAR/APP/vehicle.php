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
     * Position of vehicle Y(Vertical)
     *
     * @var float 
     */
    public $y;

    /**
     * Position of vehicle X(Horizontal)
     *
     * @var float
     */
    public $x;

    /**
     * vehicle constructor
     *
     * @param float $x X-position
     * @param float $y Y-position
     */
    public function __construct(float $x, float $y)
    {
        $this->chDirect($x);
    }
    /**
     * change direct of car 
     *
     * @param float x-position
     */
    public function chDirect(float $x): float
    {
      if($x = $x){
        $x++
      }
      else{
        $x--
      }
        return $this->$x ;
    }
      /**
     * X position getter
     *
     * @return float x-position
     */
    public function getX(): float
    {
        return $this->x;
    }
    /**
     * Y position getter
     *
     * @return float y-position
     */
    public function getY(): float
    {
        return $this->y;
    }


  }