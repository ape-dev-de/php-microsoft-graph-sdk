<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2RestrictionEnforcementType - Enum
 */
enum Fido2RestrictionEnforcementType: string
{
    case ALLOW = 'allow';
    case BLOCK = 'block';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
