<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppLockerApplicationControlType - Enum
 * Possible values of AppLocker Application Control Types
 */
enum AppLockerApplicationControlType: string
{
    case NOTCONFIGURED = 'notConfigured';
    case ENFORCECOMPONENTSANDSTOREAPPS = 'enforceComponentsAndStoreApps';
    case AUDITCOMPONENTSANDSTOREAPPS = 'auditComponentsAndStoreApps';
    case ENFORCECOMPONENTSSTOREAPPSANDSMARTLOCKER = 'enforceComponentsStoreAppsAndSmartlocker';
    case AUDITCOMPONENTSSTOREAPPSANDSMARTLOCKER = 'auditComponentsStoreAppsAndSmartlocker';
}
