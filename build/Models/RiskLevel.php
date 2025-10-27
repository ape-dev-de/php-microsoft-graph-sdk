<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskLevel - Enum
 */
enum RiskLevel: string
{
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case HIDDEN = 'hidden';
    case NONE = 'none';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
