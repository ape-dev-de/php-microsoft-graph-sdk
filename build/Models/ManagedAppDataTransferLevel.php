<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDataTransferLevel - Enum
 * Data can be transferred from/to these classes of apps
 */
enum ManagedAppDataTransferLevel: string
{
    case ALLAPPS = 'allApps';
    case MANAGEDAPPS = 'managedApps';
    case NONE = 'none';
}
