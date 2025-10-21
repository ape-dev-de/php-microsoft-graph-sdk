<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOsLobAppAssignmentSettings
 */
class MacOsLobAppAssignmentSettings
{
    public function __construct(
        /** When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune. */
        public ?bool $uninstallOnDeviceRemoval = null
    ) {}
}
