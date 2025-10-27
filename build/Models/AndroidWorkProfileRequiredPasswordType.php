<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileRequiredPasswordType - Enum
 * Android Work Profile required password type.
 */
enum AndroidWorkProfileRequiredPasswordType: string
{
    case DEVICEDEFAULT = 'deviceDefault';
    case LOWSECURITYBIOMETRIC = 'lowSecurityBiometric';
    case REQUIRED = 'required';
    case ATLEASTNUMERIC = 'atLeastNumeric';
    case NUMERICCOMPLEX = 'numericComplex';
    case ATLEASTALPHABETIC = 'atLeastAlphabetic';
    case ATLEASTALPHANUMERIC = 'atLeastAlphanumeric';
    case ALPHANUMERICWITHSYMBOLS = 'alphanumericWithSymbols';
}
