<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkCallEventType - Enum
 */
enum TeamworkCallEventType: string
{
    case CALL = 'call';
    case MEETING = 'meeting';
    case SCREENSHARE = 'screenShare';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
