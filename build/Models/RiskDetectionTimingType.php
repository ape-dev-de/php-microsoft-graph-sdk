<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskDetectionTimingType - Enum
 */
enum RiskDetectionTimingType: string
{
    case NOTDEFINED = 'notDefined';
    case REALTIME = 'realtime';
    case NEARREALTIME = 'nearRealtime';
    case OFFLINE = 'offline';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
