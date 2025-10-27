<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHealthIssueSeverity - Enum
 */
enum SecurityHealthIssueSeverity: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
