<?php

namespace TennisGame;

class TennisGameOne implements TennisGame
{
    private $playerOneScore = 0;
    private $playerTwoScore = 0;

    const PLAYER_1_ID = 'player1';
    const PLAYER_2_ID = 'player2';

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

        $this->gameState->wonPoint($this, $playerName);
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
        return (abs($this->getPlayerOnePoints() - $this->getPlayerTwoPoints()) >= 2 && $this->playerHasAdvantage());
    }

    public function playerHasAdvantage()
    {
        return $this->getPlayerOnePoints() >= 4 || $this->getPlayerTwoPoints() >= 4;
    }
}
