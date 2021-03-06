<?php

namespace TennisGame;

class InitialGameState extends GameState
{
    public function wonPoint(TennisGame $tennisGame)
    {
        $tennisGame->setState(new UnequalScoreState());
    }

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    public function getScore(TennisGame $tennisGame)
    {
        return ScorePointToDescription::getDescriptionByPoints(0) . '-All';
    }
}
