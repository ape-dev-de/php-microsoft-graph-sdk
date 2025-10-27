<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetType - Enum
 */
enum CrossTenantAccessPolicyTargetType: string
{
    case USER = 'user';
    case GROUP = 'group';
    case APPLICATION = 'application';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
