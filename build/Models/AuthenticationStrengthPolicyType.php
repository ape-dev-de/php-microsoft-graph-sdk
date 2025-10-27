<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthPolicyType - Enum
 */
enum AuthenticationStrengthPolicyType: string
{
    case BUILTIN = 'builtIn';
    case CUSTOM = 'custom';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
