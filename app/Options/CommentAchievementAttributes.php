<?php

namespace App\Options;

class CommentAchievementAttributes
{  
    public const FIRST_COMMENT_WRITTEN = 'FIRST_COMMENT_WRITTEN';

    public const THREE_COMMENTS_WRITTEN = 'THREE_COMMENTS_WRITTEN';

    public const FIVE_COMMENTS_WRITTEN = 'FIVE_COMMENTS_WRITTEN';

    public const TEN_COMMENTS_WRITTEN = '1TEN_COMMENTS_WRITTEN';

    public const TWENTY_COMMENTS_WRITTEN = 'TWENTY_COMMENTS_WRITTEN';

    public static $count = [
        self::FIRST_COMMENT_WRITTEN   => 1,
        self::THREE_COMMENTS_WRITTEN  => 3,
        self::FIVE_COMMENTS_WRITTEN   => 5,
        self::TEN_COMMENTS_WRITTEN    => 10,
        self::TWENTY_COMMENTS_WRITTEN => 20,
    ];

    public static $title = [
        self::FIRST_COMMENT_WRITTEN   => 'First Comment Written',
        self::THREE_COMMENTS_WRITTEN  => '3 Comment Written',
        self::FIVE_COMMENTS_WRITTEN   => '5 Comment Written',
        self::TEN_COMMENTS_WRITTEN    => '10 Comment Written',
        self::TWENTY_COMMENTS_WRITTEN => '20 Comment Written',
    ];

}
