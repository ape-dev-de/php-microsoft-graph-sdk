<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceManagementExchangeAccessState - Enum
 * Device Exchange Access State.
 */
enum DeviceManagementExchangeAccessState: string
{
    case NONE = 'none';
    case UNKNOWN = 'unknown';
    case ALLOWED = 'allowed';
    case BLOCKED = 'blocked';
    case QUARANTINED = 'quarantined';
}
