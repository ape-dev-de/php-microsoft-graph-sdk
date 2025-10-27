<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaSourceContentCategory - Enum
 */
enum MediaSourceContentCategory: string
{
    case MEETING = 'meeting';
    case LIVESTREAM = 'liveStream';
    case PRESENTATION = 'presentation';
    case SCREENRECORDING = 'screenRecording';
    case STORY = 'story';
    case PROFILE = 'profile';
    case CHAT = 'chat';
    case NOTE = 'note';
    case COMMENT = 'comment';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
