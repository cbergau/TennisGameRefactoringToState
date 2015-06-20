<?php

namespace TennisGame;

class TennisGameOneTest extends TennisGameTestCase
{
    public function setUp()
    {
        $this->game = new TennisGameOne('player1', 'player2');
    }

    /**
     * @param int    $score1
     * @param int    $score2
     * @param string $expectedResult
     *
     * @dataProvider data
     */
    public function testScores($score1, $score2, $expectedResult)
    {
        $highestScore = max($score1, $score2);

        for ($i = 0; $i < $highestScore; $i++) {
            if ($i < $score1) {
                $this->game->wonPoint("player1");
            }
            if ($i < $score2) {
                $this->game->wonPoint("player2");
            }
        }

        $this->assertEquals($expectedResult, $this->game->getScore());
    }

    /**
     * @expectedException \LogicException
     */
    public function testCanNotScoreIfGameAlreadyWon()
    {
        $this->game->wonPoint('player1');
        $this->game->wonPoint('player1');
        $this->game->wonPoint('player1');
        $this->game->wonPoint('player1');
        $this->game->wonPoint('player1');
    }
}
