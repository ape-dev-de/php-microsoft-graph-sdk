<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionType - Enum
 */
enum PermissionType: string
{
    case DELEGATEDUSERCONSENTABLE = 'delegatedUserConsentable';
    case DELEGATED = 'delegated';
    case APPLICATION = 'application';
}
