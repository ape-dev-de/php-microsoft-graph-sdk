<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PhysicalAddressType - Enum
 */
enum PhysicalAddressType: string
{
    case UNKNOWN = 'unknown';
    case HOME = 'home';
    case BUSINESS = 'business';
    case OTHER = 'other';
}
