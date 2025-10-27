<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceThreatProtectionLevel - Enum
 * Device threat protection levels for the Device Threat Protection API.
 */
enum DeviceThreatProtectionLevel: string
{
    case UNAVAILABLE = 'unavailable';
    case SECURED = 'secured';
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
    case NOTSET = 'notSet';
}
