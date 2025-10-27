<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetConfigurationAccessType - Enum
 */
enum CrossTenantAccessPolicyTargetConfigurationAccessType: string
{
    case ALLOWED = 'allowed';
    case BLOCKED = 'blocked';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
