<?php

namespace marek\car;

/**
 * 
 * 
 * @author Marek <marek.stolz019@skolavdf.cz>
 * @copyright 2022 
 */

interface Move
{
    
    /**
     * X position getter
     *
     * @return float x-position
     */
    public function getX(): float;

    /**
     * Y position getter
     *
     * @return float y-position
     */
    public function getY(): float;

    /**
     * gives the command to move
     *
     * @param  float  y
     */
    public function go(): float;{
        return $this-> $y++  
    }

    /**
     * gives the command to stop
     *
     * @return float new y-position
     */
    public function stop(): float;{
       return $this--> $y
    }

}