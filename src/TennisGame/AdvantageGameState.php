<?php

namespace TennisGame;

class AdvantageGameState extends GameState
{
    public function wonPoint(TennisGame $tennisGame, $playerName)
    {
        $minusResult = abs($tennisGame->getPlayerOnePoints() - $tennisGame->getPlayerTwoPoints());

        if ($minusResult == 2) {
            $tennisGame->setState(new WinGameState());
        }
    }

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    public function getScore(TennisGame $tennisGame)
    {
        return ($tennisGame->getPlayerOnePoints() > $tennisGame->getPlayerTwoPoints())
            ? 'Advantage ' . TennisGameOne::PLAYER_1_ID
            : 'Advantage ' . TennisGameOne::PLAYER_2_ID;
    }
}
