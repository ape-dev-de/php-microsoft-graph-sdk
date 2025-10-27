<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementSubscriptionState - Enum
 * Tenant mobile device management subscription state.
 */
enum DeviceManagementSubscriptionState: string
{
    case PENDING = 'pending';
    case ACTIVE = 'active';
    case WARNING = 'warning';
    case DISABLED = 'disabled';
    case DELETED = 'deleted';
    case BLOCKED = 'blocked';
    case LOCKEDOUT = 'lockedOut';
}
