<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingType - Enum
 */
enum BookingType: string
{
    case UNKNOWN = 'unknown';
    case STANDARD = 'standard';
    case RESERVED = 'reserved';
}
