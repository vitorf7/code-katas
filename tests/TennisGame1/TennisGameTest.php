<?php

namespace VitorF7\CodeKatas\Tests\TennisGame1;

use VitorF7\CodeKatas\TennisGame1\Player;
use VitorF7\CodeKatas\TennisGame1\TennisGame;

class TennisGameTest extends \PHPUnit_Framework_TestCase
{
    protected $tennisGame;
    protected $john;
    protected $jane;

    public function setUp()
    {
        $this->john = new Player('John Doe', 0);
        $this->jane = new Player('Jane Doe', 0);

        $this->tennisGame = new TennisGame(
            $this->john,
            $this->jane
        );
    }

    private function scorePoints($player, $points)
    {
        foreach (range(1, $points) as $scorePoint) {
            $player->scorePoint();
        }
    }

    /** @test */
    public function it_makes_sure_that_it_has_the_players_names()
    {
        $this->assertEquals('John Doe', $this->tennisGame->player1->name());
        $this->assertEquals('Jane Doe', $this->tennisGame->player2->name());
    }

    /** @test */
    public function it_scores_a_scoreless_game()
    {
        $result = $this->tennisGame->score();

        $this->assertEquals('Love-All', $result);
    }

    /** @test */
    public function it_scores_a_1_0_game()
    {
        $this->scorePoints($this->tennisGame->player1, 1);

        $result = $this->tennisGame->score();

        $this->assertEquals('15-Love', $result);
    }

    /** @test */
    public function it_scores_a_2_0_game()
    {
        $this->scorePoints($this->tennisGame->player1, 2);

        $result = $this->tennisGame->score();

        $this->assertEquals('30-Love', $result);
    }

    /** @test */
    public function it_scores_a_3_0_game()
    {
        $this->scorePoints($this->tennisGame->player1, 3);

        $result = $this->tennisGame->score();

        $this->assertEquals('40-Love', $result);
    }

    /** @test */
    public function it_scores_a_4_0_game()
    {
        $this->scorePoints($this->tennisGame->player1, 4);

        $result = $this->tennisGame->score();

        $this->assertEquals('Game win for John Doe', $result);
    }

}
