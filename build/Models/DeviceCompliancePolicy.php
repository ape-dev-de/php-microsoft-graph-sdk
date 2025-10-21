<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicy
 */
class DeviceCompliancePolicy
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
        /** The collection of assignments for this compliance policy. */
        public array $assignments = [],
        /** Compliance Setting State Device Summary */
        public array $deviceSettingStateSummaries = [],
        /** List of DeviceComplianceDeviceStatus. */
        public array $deviceStatuses = [],
        /** Device compliance devices status overview */
        public ?string $deviceStatusOverview = null,
        /** The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies. */
        public array $scheduledActionsForRule = [],
        /** List of DeviceComplianceUserStatus. */
        public array $userStatuses = [],
        /** Device compliance users status overview */
        public ?string $userStatusOverview = null
    ) {}
}
