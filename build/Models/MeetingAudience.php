<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingAudience - Enum
 */
enum MeetingAudience: string
{
    case EVERYONE = 'everyone';
    case ORGANIZATION = 'organization';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
