<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNotificationSettings
 */
class IosNotificationSettings
{
    public function __construct(
        /**  */
        public ?string $alertType = null,
        /** Application name to be associated with the bundleID. */
        public ?string $appName = null,
        /** Indicates whether badges are allowed for this app. */
        public ?bool $badgesEnabled = null,
        /** Bundle id of app to which to apply these notification settings. */
        public ?string $bundleID = null,
        /** Indicates whether notifications are allowed for this app. */
        public ?bool $enabled = null,
        /** Publisher to be associated with the bundleID. */
        public ?string $publisher = null,
        /** Indicates whether notifications can be shown in notification center. */
        public ?bool $showInNotificationCenter = null,
        /** Indicates whether notifications can be shown on the lock screen. */
        public ?bool $showOnLockScreen = null,
        /** An item describing notification setting. */
        public ?string $soundsEnabled = null
    ) {}
}
