<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceMembershipChangeType - Enum
 */
enum IdentityGovernanceMembershipChangeType: string
{
    case ADD = 'add';
    case REMOVE = 'remove';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
