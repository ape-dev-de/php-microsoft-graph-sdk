<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityDeviceRiskScore - Enum
 */
enum SecurityDeviceRiskScore: string
{
    case NONE = 'none';
    case INFORMATIONAL = 'informational';
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
