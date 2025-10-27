<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDataEncryptionType - Enum
 * Represents the level to which app data is encrypted for managed apps
 */
enum ManagedAppDataEncryptionType: string
{
    case USEDEVICESETTINGS = 'useDeviceSettings';
    case AFTERDEVICERESTART = 'afterDeviceRestart';
    case WHENDEVICELOCKEDEXCEPTOPENFILES = 'whenDeviceLockedExceptOpenFiles';
    case WHENDEVICELOCKED = 'whenDeviceLocked';
}
