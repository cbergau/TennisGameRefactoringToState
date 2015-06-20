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
        return sprintf('%s-%s',
            $this->getScoreDescription($tennisGame->getPlayerOnePoints()),
            $this->getScoreDescription($tennisGame->getPlayerTwoPoints())
        );
    }

    /**
     * @param $scorePoints
     *
     * @return string
     */
    protected function getScoreDescription($scorePoints)
    {
        $scoreDescription = '';
        switch ($scorePoints) {
            case 0:
                $scoreDescription .= "Love";
                break;
            case 1:
                $scoreDescription .= "Fifteen";
                break;
            case 2:
                $scoreDescription .= "Thirty";
                break;
            case 3:
                $scoreDescription .= "Forty";
                break;
        }
        return $scoreDescription;
    }
}
