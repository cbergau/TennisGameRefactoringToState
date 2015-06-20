<?php

namespace TennisGame;

class UnequalScoreState extends GameState
{
    public function wonPoint(TennisGame $tennisGame, $playerName)
    {
        $minusResult = abs($tennisGame->getPlayerOnePoints() - $tennisGame->getPlayerTwoPoints());
        if ($tennisGame->getPlayerOnePoints() >= 4 || $tennisGame->getPlayerTwoPoints() >= 4) {
            if ($minusResult >= 2) {
                $tennisGame->setState(new WinGameState());
                return;
            }
            $tennisGame->setState(new AdvantageGameState());
        }
    }

    /**
     * @param TennisGame $tennisGame
     *
     * @return string
     */
    public function getScore(TennisGame $tennisGame)
    {
        $score = '';
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) {
                $tempScore = $tennisGame->getPlayerOnePoints();
            } else {
                $score .= "-";
                $tempScore = $tennisGame->getPlayerTwoPoints();
            }
            switch ($tempScore) {
                case 0:
                    $score .= "Love";
                    break;
                case 1:
                    $score .= "Fifteen";
                    break;
                case 2:
                    $score .= "Thirty";
                    break;
                case 3:
                    $score .= "Forty";
                    break;
            }
        }

        return $score;
    }
}
