<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BroadcastMeetingAudience - Enum
 */
enum BroadcastMeetingAudience: string
{
    case ROLEISATTENDEE = 'roleIsAttendee';
    case ORGANIZATION = 'organization';
    case EVERYONE = 'everyone';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
