<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadComplexity - Enum
 */
enum PayloadComplexity: string
{
    case UNKNOWN = 'unknown';
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
