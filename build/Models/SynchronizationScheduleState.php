<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationScheduleState - Enum
 */
enum SynchronizationScheduleState: string
{
    case ACTIVE = 'Active';
    case DISABLED = 'Disabled';
    case PAUSED = 'Paused';
}
