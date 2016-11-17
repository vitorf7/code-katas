<?php

namespace VitorF7\CodeKatas\Tests\BowlingGame1;

use VitorF7\CodeKatas\BowlingGame1\BowlingGame;

class BowlingGameTest extends \PHPUnit_Framework_TestCase
{
    private $game;

    public function setUp()
    {
        $this->game = new BowlingGame();
    }

    private function rollMany($numberOfRolls, $numberOfPins)
    {
        for ($i = 0; $i < $numberOfRolls; $i++) {
            $this->game->roll($numberOfPins);
        }
    }

    private function rollSpare()
    {
        $this->game->roll(5);
        $this->game->roll(5);
    }

    private function rollStrike()
    {
        $this->game->roll(10);
    }

    /** @test */
    public function it_scores_a_gutter_game()
    {
        $this->rollMany(20, 0);

        $this->assertEquals(0, $this->game->score());
    }

    /** @test */
    public function it_scores_all_ones()
    {
        $this->rollMany(20, 1);

        $this->assertEquals(20, $this->game->score());
    }

    /** @test */
    public function it_scores_a_spare_and_awards_the_bonus()
    {
        $this->rollSpare();
        $this->game->roll(3);
        $this->rollMany(17, 0);

        $this->assertEquals(16, $this->game->score());
    }

    /** @test */
    public function it_scores_a_strike_and_awards_the_bonus()
    {
        $this->rollStrike();
        $this->game->roll(7);
        $this->game->roll(2);
        $this->rollMany(17, 0);

        $this->assertEquals(28, $this->game->score());
    }

    /** @test */
    public function it_scores_a_perfect_game()
    {
        $this->rollMany(12, 10);

        $this->assertEquals(300, $this->game->score());
    }
}
