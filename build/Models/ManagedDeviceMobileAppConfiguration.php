<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfiguration
 */
class ManagedDeviceMobileAppConfiguration
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
        /** @var string[] the associated app. */
        public array $targetedMobileApps = [],
        /** Version of the device configuration. */
        public ?float $version = null,
        /** The list of group assignemenets for app configration. */
        public array $assignments = [],
        /** List of ManagedDeviceMobileAppConfigurationDeviceStatus. */
        public array $deviceStatuses = [],
        /** App configuration device status summary. */
        public ?string $deviceStatusSummary = null,
        /** List of ManagedDeviceMobileAppConfigurationUserStatus. */
        public array $userStatuses = [],
        /** An abstract class for Mobile app configuration for enrolled devices. */
        public ?string $userStatusSummary = null
    ) {}
}
