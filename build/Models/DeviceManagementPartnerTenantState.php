<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementPartnerTenantState - Enum
 * Partner state of this tenant.
 */
enum DeviceManagementPartnerTenantState: string
{
    case UNKNOWN = 'unknown';
    case UNAVAILABLE = 'unavailable';
    case ENABLED = 'enabled';
    case TERMINATED = 'terminated';
    case REJECTED = 'rejected';
    case UNRESPONSIVE = 'unresponsive';
}
