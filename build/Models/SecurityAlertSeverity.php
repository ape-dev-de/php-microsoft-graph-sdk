<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAlertSeverity - Enum
 */
enum SecurityAlertSeverity: string
{
    case UNKNOWN = 'unknown';
    case INFORMATIONAL = 'informational';
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
