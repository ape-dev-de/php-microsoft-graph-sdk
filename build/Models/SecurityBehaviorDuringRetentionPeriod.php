<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityBehaviorDuringRetentionPeriod - Enum
 */
enum SecurityBehaviorDuringRetentionPeriod: string
{
    case DONOTRETAIN = 'doNotRetain';
    case RETAIN = 'retain';
    case RETAINASRECORD = 'retainAsRecord';
    case RETAINASREGULATORYRECORD = 'retainAsRegulatoryRecord';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
