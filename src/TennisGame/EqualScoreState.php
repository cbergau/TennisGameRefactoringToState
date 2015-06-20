<?php

namespace TennisGame;

class EqualScoreState extends GameState
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
        switch ($tennisGame->getPlayerOnePoints()) {
            case 0:
                $score = 'Love-All';
                break;
            case 1:
                $score = "Fifteen-All";
                break;
            case 2:
                $score = "Thirty-All";
                break;
            default:
                $score = "Deuce";
                break;
        }

        return $score;
    }
}
