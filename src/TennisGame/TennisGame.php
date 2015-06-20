<?php

namespace TennisGame;

interface TennisGame
{
    /**
     * @param string $playerName
     */
    public function wonPoint($playerName);

    /**
     * @return string
     */
    public function getScore();

    /**
     * @param GameState $gameState
     */
    public function setState(GameState $gameState);

    /**
     * @return int
     */
    public function getPlayerOnePoints();

    /**
     * @return int
     */
    public function getPlayerTwoPoints();

    /**
     * @return bool
     */
    public function playerWonMatch();
}
