<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDefaultRecordBehavior - Enum
 */
enum SecurityDefaultRecordBehavior: string
{
    case STARTLOCKED = 'startLocked';
    case STARTUNLOCKED = 'startUnlocked';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
