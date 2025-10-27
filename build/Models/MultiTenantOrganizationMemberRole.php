<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMemberRole - Enum
 */
enum MultiTenantOrganizationMemberRole: string
{
    case OWNER = 'owner';
    case MEMBER = 'member';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
