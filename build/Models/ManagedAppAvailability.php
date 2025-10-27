<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppAvailability - Enum
 * A managed (MAM) application's availability.
 */
enum ManagedAppAvailability: string
{
    case GLOBAL = 'global';
    case LINEOFBUSINESS = 'lineOfBusiness';
}
