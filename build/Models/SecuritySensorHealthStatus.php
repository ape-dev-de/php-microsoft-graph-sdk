<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorHealthStatus - Enum
 */
enum SecuritySensorHealthStatus: string
{
    case HEALTHY = 'healthy';
    case NOTHEALTHYLOW = 'notHealthyLow';
    case NOTHEALTHYMEDIUM = 'notHealthyMedium';
    case NOTHEALTHYHIGH = 'notHealthyHigh';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
