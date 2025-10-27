<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProcessIntegrityLevel - Enum
 */
enum ProcessIntegrityLevel: string
{
    case UNKNOWN = 'unknown';
    case UNTRUSTED = 'untrusted';
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case SYSTEM = 'system';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
