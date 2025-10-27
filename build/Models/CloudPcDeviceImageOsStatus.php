<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcDeviceImageOsStatus - Enum
 */
enum CloudPcDeviceImageOsStatus: string
{
    case SUPPORTED = 'supported';
    case SUPPORTEDWITHWARNING = 'supportedWithWarning';
    case UNKNOWN = 'unknown';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
