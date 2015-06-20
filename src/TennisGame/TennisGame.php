<?php

namespace TennisGame;

interface TennisGame
{
    /**
     * @param  $playerName
     * @return void
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

    public function getPlayerOnePoints();

    public function getPlayerTwoPoints();
}
