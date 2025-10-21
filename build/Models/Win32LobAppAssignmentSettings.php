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
        public ?string $autoUpdateSettings = null,
        /**  */
        public ?string $deliveryOptimizationPriority = null,
        /** The install time settings to apply for this app assignment. */
        public ?string $installTimeSettings = null,
        /**  */
        public ?string $notifications = null,
        /** The reboot settings to apply for this app assignment. */
        public ?string $restartSettings = null
    ) {}
}
