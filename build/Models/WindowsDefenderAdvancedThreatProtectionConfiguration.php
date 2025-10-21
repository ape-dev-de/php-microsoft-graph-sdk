<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDefenderAdvancedThreatProtectionConfiguration
 */
class WindowsDefenderAdvancedThreatProtectionConfiguration
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
        /** Device Configuration users status overview */
        public ?string $userStatusOverview = null,
        /** Windows Defender AdvancedThreatProtection 'Allow Sample Sharing' Rule */
        public ?bool $allowSampleSharing = null,
        /** Expedite Windows Defender Advanced Threat Protection telemetry reporting frequency. */
        public ?bool $enableExpeditedTelemetryReporting = null
    ) {}
}
