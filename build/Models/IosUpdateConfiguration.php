<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdateConfiguration
 */
class IosUpdateConfiguration
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
        public ?string $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration. */
        public ?string $userStatusOverview = null,
        /** Active Hours End (active hours mean the time window when updates install should not happen) */
        public ?string $activeHoursEnd = null,
        /** Active Hours Start (active hours mean the time window when updates install should not happen) */
        public ?string $activeHoursStart = null,
        /** Days in week for which active hours are configured. This collection can contain a maximum of 7 elements. */
        public array $scheduledInstallDays = [],
        /** IOS Update Configuration, allows you to configure time window within week to install iOS updates */
        public ?string $utcTimeOffsetInMinutes = null
    ) {}
}
