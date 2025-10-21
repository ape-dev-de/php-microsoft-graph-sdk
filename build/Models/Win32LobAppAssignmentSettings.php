<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAssignmentSettings
 */
class Win32LobAppAssignmentSettings
{
    public function __construct(
        /** The auto-update settings to apply for this app assignment. */
        public ?Win32LobAppAutoUpdateSettings $autoUpdateSettings = null,
        /**  */
        public ?Win32LobAppDeliveryOptimizationPriority $deliveryOptimizationPriority = null,
        /** The install time settings to apply for this app assignment. */
        public ?MobileAppInstallTimeSettings $installTimeSettings = null,
        /**  */
        public ?Win32LobAppNotification $notifications = null,
        /** The reboot settings to apply for this app assignment. */
        public ?Win32LobAppRestartSettings $restartSettings = null
    ) {}
}
