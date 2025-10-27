<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageSubjectType - Enum
 */
enum AccessPackageSubjectType: string
{
    case NOTSPECIFIED = 'notSpecified';
    case USER = 'user';
    case SERVICEPRINCIPAL = 'servicePrincipal';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
