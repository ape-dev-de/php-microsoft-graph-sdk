<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceOwnerType - Enum
 * Owner type of device.
 */
enum ManagedDeviceOwnerType: string
{
    case UNKNOWN = 'unknown';
    case COMPANY = 'company';
    case PERSONAL = 'personal';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
