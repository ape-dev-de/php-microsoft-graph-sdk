<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDefenderAvStatus - Enum
 */
enum SecurityDefenderAvStatus: string
{
    case NOTREPORTING = 'notReporting';
    case DISABLED = 'disabled';
    case NOTUPDATED = 'notUpdated';
    case UPDATED = 'updated';
    case UNKNOWN = 'unknown';
    case NOTSUPPORTED = 'notSupported';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
