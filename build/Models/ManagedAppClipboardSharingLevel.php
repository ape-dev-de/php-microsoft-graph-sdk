<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppClipboardSharingLevel - Enum
 * Represents the level to which the device's clipboard may be shared between apps
 */
enum ManagedAppClipboardSharingLevel: string
{
    case ALLAPPS = 'allApps';
    case MANAGEDAPPSWITHPASTEIN = 'managedAppsWithPasteIn';
    case MANAGEDAPPS = 'managedApps';
    case BLOCKED = 'blocked';
}
