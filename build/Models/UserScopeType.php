<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserScopeType - Enum
 */
enum UserScopeType: string
{
    case USER = 'user';
    case GROUP = 'group';
    case TENANT = 'tenant';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
