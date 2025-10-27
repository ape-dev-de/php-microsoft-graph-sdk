<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationState - Enum
 */
enum MultiTenantOrganizationState: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
