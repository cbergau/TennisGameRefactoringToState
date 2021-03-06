<?php

namespace TennisGame;

class WinGameState extends GameState
{
    public function wonPoint(TennisGame $tennisGame)
    {
        throw new \LogicException('A player already won a game');
    }

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    public function getScore(TennisGame $tennisGame)
    {
        return ($tennisGame->getPlayerOnePoints() > $tennisGame->getPlayerTwoPoints())
            ? 'Win for ' . TennisGameOne::PLAYER_1_ID
            : 'Win for ' . TennisGameOne::PLAYER_2_ID;
    }
}
