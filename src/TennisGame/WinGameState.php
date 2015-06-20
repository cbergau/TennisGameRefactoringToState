<?php

namespace TennisGame;

class WinGameState extends GameState
{
    public function wonPoint(TennisGame $tennisGame, $playerName)
    {

    }

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    public function getScore(TennisGame $tennisGame)
    {
        return ($tennisGame->getPlayerOnePoints() > $tennisGame->getPlayerTwoPoints())
            ? 'Win for player1'
            : 'Win for player2';
    }
}
