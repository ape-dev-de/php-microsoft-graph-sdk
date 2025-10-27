<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEventType - Enum
 */
enum CallEventType: string
{
    case CALLSTARTED = 'callStarted';
    case CALLENDED = 'callEnded';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ROSTERUPDATED = 'rosterUpdated';
}
