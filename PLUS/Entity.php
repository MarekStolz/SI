<?php

namespace michal\demogame;

/**
 * Entity abstract class
 * 
 * @author Michal <michal.bubilek@skolavdf.cz>
 * @version 0.0.1
 * @copyright 2022 MIT
 * @todo optimalization something
 */
abstract class Entity implements Movable
https://viewer.diagrams.net/?tags=%7B%7D&highlight=0000ff&edit=_blank&layers=1&nav=1&title=Untitled%20Diagram.drawio#R3Vhdb9owFP01kdhDJ5IQSh8LtCuTKk2qtJW9mcRJvDlxcAxN9ut3HTvfUGhVOjoJgX18fX2vfX2OhWHPouwLR0l4zzxMDWvoZYY9NyzLHFmWIT9DL1fIpX2pgIATTxvVwAP5gzU41OiGeDhtGQrGqCBJG3RZHGNXtDDEOXtqm%2FmMtldNUIB7wIOLaB%2F9QTwRKnRiXdb4HSZBWK5sjq%2FUSIRKY51JGiKPPTUg%2B8awZ5wxoVpRNsNUbl65L2re7Z7RKjCOY3HMhK%2FLfD3JpsMsTVYZ2fxaL36KC306W0Q3OmHDGlPwN01kyCLX%2BzBeb2Sc0wjxgMSGfQ2jwySDbwCLbCV%2BIViixkaNMYEzcYEoCfQ8FwLGvPYJrUD%2FFiuvSuA7DokLAWgcUlt1bQFLuljIZehlJZWrmPsXfFWqFPuikWvft7TNlQWBE3om4NOtnx21%2FhltmD7yQYK5z3iEYheOfyZ5gKnfVJZY0XLDOeFw5T8VTt97d5XvNEFxO4EyqkGmosw74bVn6ILnz5e11crA2mIuCDDUtbpS8%2BLSTfUFm6vIpwysfFrwjU%2BAB%2Bypz2Kh%2BdW0dP8WRYRKZr7DdIulV1kOIqLSqFpbLoizvbRjVmQGKoBZhAXPVe3J0dGV5j8tAPZI959qOrVKLGxSaQkiTeFB5btmOWhoonsB6dnnTHozxM%2BG8Jrfz1xawfha7uQbUt2RK6cJxt5H47gGtw301ilqk8l86mVziB1Oz3L%2FNT%2BZdoefbKfHT%2BbVTn5yTsRPox4%2F3WQCx17a22oAr%2BUjF3orytzfsCUAlbs4Vt3bYn%2Fnw%2FbWcbaJPXl5igGcEfGoR2R7KfHPju7Ns4bZPC87MST72Ow0ZsluPa3olfNUFtjrPbw7RwaZsg138WEmF1DOWBx65vZLoHnEY33EHFMkyLYd264j1u6%2BseKuluVkd8ppZHZUTOWkZzWf6x1HXd3sOVJJ9xwVFVfl%2BPoidM5QJEkDQJFkFdrvLaQPH8mHo4bbU7pERg7TXaXC90BbZ6POp6Dy83hQBGyw0HehUEZ1MeAp%2FY4vCyjYATk%2BiA%2BtgY7ptLjGmRytgad6o4979LOIEoojyOiUMlhJWq1iy5aI7Za0Uj5ryVw2xHS3fL6hDFpHyqDzz2TQnryRDPYc7ZFBqAeUN8wSaZC%2BTCihW%2F89p8zrPzntm78%3D
{

    /**
     * X enemy position
     *
     * @var float
     */
    protected $x;

    /**
     * Y enemy position
     *
     * @var float
     */
    protected $y;

    /**
     * Enemy constructor
     *
     * @param float $x X-position
     * @param float $y Y-position
     */
    public function __construct(float $x, float $y)
    {
        $this->setPos($x, $y);
    }

    /**
     * Set the 2D position of the entity
     *
     * @param float $x x-position
     * @param float $y y-position
     * @return void
     */
    public function setPos(float $x, float $y): void
    {
        $this->x = $x;
        $this->y = $y;
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

    /**
     * Calculate and get distance to the entity
     *
     * @param Movable $entity 
     * @return float distance
     */
    public function getDistance(Movable $entity): float
    {
        return sqrt(
            pow(
                abs($this->getX() - $entity->getX()),
                2
            ) + pow(
                abs($this->getY() - $entity->getY()),
                2
            )
        );
    }
}
