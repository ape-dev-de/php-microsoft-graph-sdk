<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncludedUserRoles - Enum
 */
enum IncludedUserRoles: string
{
    case ALL = 'all';
    case PRIVILEGEDADMIN = 'privilegedAdmin';
    case ADMIN = 'admin';
    case USER = 'user';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
