<?php

namespace TennisGame;

class TennisGameOne implements TennisGame
{
    private $playerOneScore = 0;
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
        if ('player1' == $playerName) {
            $this->playerOneScore++;
        } else {
            $this->playerTwoScore++;
        }

        $this->gameState->wonPoint($this, $playerName);
    }

    public function getScore()
    {
        return $this->gameState->getScore($this);
    }

    /**
     * @param GameState $gameState
     */
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
}
