<?php

namespace TennisGame;

class EqualScoreState extends GameState
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
        if ($tennisGame->getPlayerOnePoints() <= 2) {
            return ScorePointToDescription::getDescriptionByPoints($tennisGame->getPlayerOnePoints());
        }

        return 'Deuce';
    }
}
