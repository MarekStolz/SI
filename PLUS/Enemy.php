<?php

namespace michal\demogame;

/**
 * Enemy class for my game
 * 
 * @author Michal <michal.bubilek@skolavdf.cz>
 * @version 0.0.1
 * @copyright 2022 MIT
 * @todo optimalization something
 */
class Enemy extends Entity
{

    /**
     * Enemy health points
     *
     * @var int
     */
    private $hp;

    /**
     * Enemy strength
     *
     * @var int
     */
    private $strength;

    /**
     * Enemy constructor
     *
     * @param float $x X-position
     * @param float $y Y-position
     */
    public function __construct(float $x, float $y, int $hp, int $strength)
    {
        parent::__construct($x, $y);
        $this->setHp($hp);
        $this->setStrength($strength);
    }

    /**
     * Get enemy health points
     *
     * @return int healt points
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * Set enemy health points
     *
     * @param int  $hp  Enemy health points
     * @return void
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp > 0 ? $hp : 0;
    }

    /**
     * Get enemy strength
     *
     * @return  int enemy strength
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * Set enemy strength
     *
     * @param int  $strength  Enemy strength
     * @return void
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }
}
