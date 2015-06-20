<?php

namespace TennisGame;

abstract class GameState
{
    /**
     * @param TennisGame $tennisGame
     * @param string     $playerName
     */
    abstract public function wonPoint(TennisGame $tennisGame, $playerName);

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    abstract public function getScore(TennisGame $tennisGame);
}
