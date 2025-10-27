<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertStatus - Enum
 */
enum AlertStatus: string
{
    case UNKNOWN = 'unknown';
    case NEWALERT = 'newAlert';
    case INPROGRESS = 'inProgress';
    case RESOLVED = 'resolved';
    case DISMISSED = 'dismissed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
