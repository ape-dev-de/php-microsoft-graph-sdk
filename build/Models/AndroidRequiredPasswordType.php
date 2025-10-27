<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidRequiredPasswordType - Enum
 * Android required password type.
 */
enum AndroidRequiredPasswordType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case ALPHABETIC = 'alphabetic';
    case ALPHANUMERIC = 'alphanumeric';
    case ALPHANUMERICWITHSYMBOLS = 'alphanumericWithSymbols';
    case LOWSECURITYBIOMETRIC = 'lowSecurityBiometric';
    case NUMERIC = 'numeric';
    case NUMERICCOMPLEX = 'numericComplex';
    case ANY = 'any';
}
