<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityServicePrincipalType - Enum
 */
enum SecurityServicePrincipalType: string
{
    case UNKNOWN = 'unknown';
    case APPLICATION = 'application';
    case MANAGEDIDENTITY = 'managedIdentity';
    case LEGACY = 'legacy';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
