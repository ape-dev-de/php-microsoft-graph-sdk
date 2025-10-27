<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPinCharacterSet - Enum
 * Character set which is to be used for a user's app PIN
 */
enum ManagedAppPinCharacterSet: string
{
    case NUMERIC = 'numeric';
    case ALPHANUMERICANDSYMBOL = 'alphanumericAndSymbol';
}
