<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefenderScanType - Enum
 * Possible values for system scan type.
 */
enum DefenderScanType: string
{
    case USERDEFINED = 'userDefined';
    case DISABLED = 'disabled';
    case QUICK = 'quick';
    case FULL = 'full';
}
