<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberState - Enum
 */
enum MultiTenantOrganizationMemberState: string
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case REMOVED = 'removed';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
