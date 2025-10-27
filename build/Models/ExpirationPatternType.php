<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExpirationPatternType - Enum
 */
enum ExpirationPatternType: string
{
    case NOTSPECIFIED = 'notSpecified';
    case NOEXPIRATION = 'noExpiration';
    case AFTERDATETIME = 'afterDateTime';
    case AFTERDURATION = 'afterDuration';
}
