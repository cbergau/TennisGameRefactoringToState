<?php

namespace TennisGame;

class ScorePointToDescription
{
    private static $map = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public static function getDescriptionByPoints($points)
    {
        return self::$map[$points];
    }
}
