<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertStatus - Enum
 */
enum SecurityAlertStatus: string
{
    case UNKNOWN = 'unknown';
    case NEW = 'new';
    case INPROGRESS = 'inProgress';
    case RESOLVED = 'resolved';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
