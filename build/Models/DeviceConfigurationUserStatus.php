<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationUserStatus
 */
class DeviceConfigurationUserStatus
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Devices count for that user. */
        public ?float $devicesCount = null,
        /** Last modified date time of the policy report. */
        public ?\DateTimeInterface $lastReportedDateTime = null,
        /**  */
        public ?string $status = null,
        /** User name of the DevicePolicyStatus. */
        public ?string $userDisplayName = null,
        /** UserPrincipalName. */
        public ?string $userPrincipalName = null
    ) {}
}
