<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceFeaturesConfiguration
 */
class IosDeviceFeaturesConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** DateTime the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Admin provided description of the Device Configuration. */
        public ?string $description = null,
        /** Admin provided name of the device configuration. */
        public ?string $displayName = null,
        /** DateTime the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of assignments for the device configuration profile. */
        public array $assignments = [],
        /** Device Configuration Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** Device configuration installation status by device. */
        public array $deviceStatuses = [],
        /** Device Configuration devices status overview */
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Asset tag information for the device, displayed on the login window and lock screen. */
        public ?string $assetTagTemplate = null,
        /** A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements. */
        public array $homeScreenDockIcons = [],
        /** A list of pages on the Home Screen. This collection can contain a maximum of 500 elements. */
        public array $homeScreenPages = [],
        /** A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later. */
        public ?string $lockScreenFootnote = null,
        /** Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements. */
        public array $notificationSettings = []
    ) {}
}
