<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIoTDeviceImportanceType - Enum
 */
enum SecurityIoTDeviceImportanceType: string
{
    case UNKNOWN = 'unknown';
    case LOW = 'low';
    case NORMAL = 'normal';
    case HIGH = 'high';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
