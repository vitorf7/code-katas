<?php

namespace VitorF7\CodeKatas\TennisGame1;

/**
 * Class Player
 *
 * @package VitorF7\CodeKatas\Tests\TennisGame1
 */
class Player
{
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $points;

    /**
     * Player constructor.
     *
     * @param $name
     * @param $points
     */
    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    public function name()
    {
        return $this->name;
    }

    public function points()
    {
        return $this->points;
    }

    public function scorePoint()
    {
        return $this->points += 1;
    }
}