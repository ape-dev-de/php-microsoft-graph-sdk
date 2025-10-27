<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationStatusCode - Enum
 */
enum SynchronizationStatusCode: string
{
    case NOTCONFIGURED = 'NotConfigured';
    case NOTRUN = 'NotRun';
    case ACTIVE = 'Active';
    case PAUSED = 'Paused';
    case QUARANTINE = 'Quarantine';
}
