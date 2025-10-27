<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsHealthState - Enum
 */
enum UserExperienceAnalyticsHealthState: string
{
    case UNKNOWN = 'unknown';
    case INSUFFICIENTDATA = 'insufficientData';
    case NEEDSATTENTION = 'needsAttention';
    case MEETINGGOALS = 'meetingGoals';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
