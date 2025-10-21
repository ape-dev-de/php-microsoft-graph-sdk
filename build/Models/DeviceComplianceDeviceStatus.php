<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceDeviceStatus
 */
class DeviceComplianceDeviceStatus
{
    public function __construct(
        /** The DateTime when device compliance grace period expires */
        public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null,
        /** Device name of the DevicePolicyStatus. */
        public ?string $deviceDisplayName = null,
        /** The device model that is being reported */
        public ?string $deviceModel = null,
        /** Last modified date time of the policy report. */
        public ?\DateTimeInterface $lastReportedDateTime = null,
        /**  */
        public ?string $status = null,
        /** The User Name that is being reported */
        public ?string $userName = null,
        /** UserPrincipalName. */
        public ?string $userPrincipalName = null
    ) {}
}
