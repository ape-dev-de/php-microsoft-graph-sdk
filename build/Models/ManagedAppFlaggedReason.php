<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppFlaggedReason - Enum
 * The reason for which a user has been flagged
 */
enum ManagedAppFlaggedReason: string
{
    case NONE = 'none';
    case ROOTEDDEVICE = 'rootedDevice';
}
