<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerAppType - Enum
 * Partner App Type.
 */
enum DeviceManagementPartnerAppType: string
{
    case UNKNOWN = 'unknown';
    case SINGLETENANTAPP = 'singleTenantApp';
    case MULTITENANTAPP = 'multiTenantApp';
}
