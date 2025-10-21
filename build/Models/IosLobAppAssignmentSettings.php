<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosLobAppAssignmentSettings
 */
class IosLobAppAssignmentSettings
{
    public function __construct(
        /** When TRUE, indicates that the app can be uninstalled by the user. When FALSE, indicates that the app cannot be uninstalled by the user. By default, this property is set to null which internally is treated as TRUE. */
        public ?bool $isRemovable = null,
        /** When TRUE, indicates that the app should be uninstalled when the device is removed from Intune. When FALSE, indicates that the app will not be uninstalled when the device is removed from Intune. By default, property is set to null which internally is treated as TRUE. */
        public ?bool $uninstallOnDeviceRemoval = null,
        /** Contains properties used to assign an iOS LOB mobile app to a group. */
        public ?string $vpnConfigurationId = null
    ) {}
}
