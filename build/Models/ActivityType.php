<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActivityType - Enum
 */
enum ActivityType: string
{
    case SIGNIN = 'signin';
    case USER = 'user';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case SERVICEPRINCIPAL = 'servicePrincipal';
}
