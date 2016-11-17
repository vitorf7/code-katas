<?php

namespace VitorF7\CodeKatas\BowlingGame1;

/**
 * Class BowlingGame
 *
 * @package VitorF7\CodeKatas\BowlingGame1
 */
/**
 * Class BowlingGame
 *
 * @package VitorF7\CodeKatas\BowlingGame1
 */
class BowlingGame
{
    /**
     * @var array
     */
    private $rolls = [];

    /**
     * @param $pins
     *
     * @return mixed
     */
    public function roll($pins)
    {
        return $this->rolls[] = $pins;
    }

    /**
     * @return int
     */
    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++) {
            if ($this->isSpare($roll)) {
                $score += $this->awardSpareBonus($roll);
                $roll += 2;
            } elseif ($this->isStrike($roll)) {
                $score += $this->awardStrikeBonus($roll);
                $roll += 1;
            } else {
                $score += $this->frameScore($roll);
                $roll += 2;
            }
        }

        return $score;
    }

    /**
     * @param $roll
     *
     * @return bool
     */
    private function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    /**
     * @param $roll
     *
     * @return int
     */
    private function awardSpareBonus($roll)
    {
        return 10 + $this->rolls[$roll + 2];
    }

    /**
     * @param $roll
     *
     * @return mixed
     */
    private function frameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    /**
     * @param $roll
     *
     * @return bool
     */
    private function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    /**
     * @param $roll
     *
     * @return int
     */
    private function awardStrikeBonus($roll)
    {
        return 10 + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }
}