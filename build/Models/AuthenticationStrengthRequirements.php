<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthRequirements - Enum
 */
enum AuthenticationStrengthRequirements: string
{
    case NONE = 'none';
    case MFA = 'mfa';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
