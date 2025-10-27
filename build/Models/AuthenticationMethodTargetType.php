<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodTargetType - Enum
 */
enum AuthenticationMethodTargetType: string
{
    case USER = 'user';
    case GROUP = 'group';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
