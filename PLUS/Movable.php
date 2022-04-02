<?php

namespace michal\demogame;

/**
 * Interface for all movable objects in the game
 * 
 * @author Michal <michal.bubilek@skolavdf.cz>
 * @version 0.0.1
 * @copyright 2022 MIT
 */
interface Movable
{
    /**
     * Set the 2D position of the entity
     *
     * @param float $x x-position
     * @param float $y y-position
     * @return void
     */
    public function setPos(float $x, float $y): void;

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
     * Calculate and get distance to the entity
     *
     * @param Movable $entity
     * @return float distance
     */
    public function getDistance(Movable $entity): float;
}
