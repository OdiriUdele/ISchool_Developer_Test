<?php

namespace App\Options;

class BadgeAchievementCount
{
    public const BEGINNER = 0;

    public const INTERMEDIATE = 4;

    public const ADVANCED = 8;

    public const MASTER = 10;

    protected static $choices = [
        self::BEGINNER     => 0,
        self::INTERMEDIATE => 4,
        self::ADVANCED     => 8,
        self::MASTER       => 10,
    ];
}
