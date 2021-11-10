<?php

namespace App\Options;

class AchievementTypes
{  
    public const COMMENT  = 'Comment';

    public const LESSON = 'LESSON';


    public static $title = [
        self::COMMENT  => 'Comment',
        self::LESSON   => 'Lesson',
    ];

    public static $class = [
        self::COMMENT  => 'CommentAchievementAttributes',
        self::LESSON   => 'LessonsAchievementAttributes',
    ];

}