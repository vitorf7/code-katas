<?php

namespace VitorF7\CodeKatas\TennisGame1;

class TennisGame
{
    /**
     * @var Player
     */
    public $player1;
    /**
     * @var Player
     */
    public $player2;

    protected $lookup = [
        0 => 'Love',
        1 => '15',
        2 => '30',
        3 => '40'
    ];

    /**
     * TennisGame constructor.
     *
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if ($this->hasWinner()) {
            return 'Game win for ' . $this->winner()->name();
        }

        $score = $this->lookup[$this->player1->points()];
        $score .= '-';
        $score .= $this->playersAreTied() ? 'All' : $this->lookup[$this->player2->points()];

        return $score;
    }

    private function playersAreTied()
    {
        return $this->player1->points() == $this->player2->points();
    }

    private function hasWinner()
    {
        return ($this->enoughPointsToBeWon() && $this->leadingBy2Points());
    }

    private function winner()
    {
        return $this->player1->points() > $this->player2->points() ? $this->player1 : $this->player2;
    }

    private function enoughPointsToBeWon()
    {
        return max([$this->player1->points(), $this->player2->points()]) >= 4;
    }

    private function leadingBy2Points()
    {
        return abs($this->player1->points() - $this->player2->points());
    }
}