<?php

namespace TennisGame;

class InitialGameState extends GameState
{
    public function wonPoint(TennisGame $tennisGame, $playerName)
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
        return 'Love-All';
    }
}
