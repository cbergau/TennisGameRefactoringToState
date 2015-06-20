<?php

namespace TennisGame;

class TennisGameOne implements TennisGame
{
    const PLAYER_1_ID = 'player1';
    const PLAYER_2_ID = 'player2';

    /**
     * @var int
     */
    private $playerOneScore = 0;

    /**
     * @var int
     */
    private $playerTwoScore = 0;

    /**
     * @var GameState
     */
    private $gameState;

    public function __construct()
    {
        $this->gameState = new InitialGameState();
    }

    public function wonPoint($playerName)
    {
        if (self::PLAYER_1_ID == $playerName) {
            $this->playerOneScore++;
        } else {
            $this->playerTwoScore++;
        }

        $this->gameState->wonPoint($this);
    }

    public function getScore()
    {
        return $this->gameState->getScore($this);
    }

    public function setState(GameState $gameState)
    {
        $this->gameState = $gameState;
    }

    public function getPlayerOnePoints()
    {
        return $this->playerOneScore;
    }

    public function getPlayerTwoPoints()
    {
        return $this->playerTwoScore;
    }

    public function playerWonMatch()
    {
        $playerHas2PointsMore = abs($this->getPlayerOnePoints() - $this->getPlayerTwoPoints()) >= 2;
        return ($playerHas2PointsMore && $this->playerHasAdvantage());
    }

    public function playerHasAdvantage()
    {
        return $this->getPlayerOnePoints() >= 4 || $this->getPlayerTwoPoints() >= 4;
    }
}
