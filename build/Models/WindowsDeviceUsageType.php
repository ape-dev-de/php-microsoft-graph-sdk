<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceUsageType - Enum
 */
enum WindowsDeviceUsageType: string
{
    case SINGLEUSER = 'singleUser';
    case SHARED = 'shared';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
