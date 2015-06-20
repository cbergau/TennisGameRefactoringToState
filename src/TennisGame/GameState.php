<?php

namespace TennisGame;

abstract class GameState
{
    /**
     * @param TennisGame $tennisGame
     */
    abstract public function wonPoint(TennisGame $tennisGame);

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    abstract public function getScore(TennisGame $tennisGame);
}
