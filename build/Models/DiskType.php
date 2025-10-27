<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DiskType - Enum
 */
enum DiskType: string
{
    case UNKNOWN = 'unknown';
    case HDD = 'hdd';
    case SSD = 'ssd';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
