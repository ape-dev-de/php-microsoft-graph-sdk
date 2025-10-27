<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessExternalTenantsMembershipKind - Enum
 */
enum ConditionalAccessExternalTenantsMembershipKind: string
{
    case ALL = 'all';
    case ENUMERATED = 'enumerated';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
