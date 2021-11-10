<?php

namespace App\Options;

class BadgeAchievementCount
{
    public const BEGINNER = 0;

    public const INTERMEDIATE = 4;

    public const ADVANCED = 8;

    public const MASTER = 10;

    protected static $choices = [
        0  => self::BEGINNER,
        4  => self::INTERMEDIATE,
        8  => self::ADVANCED,
        10 => self::MASTER,
    ];
}
