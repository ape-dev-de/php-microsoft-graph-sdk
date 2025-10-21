<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationDeviceStatus
 */
class DeviceConfigurationDeviceStatus
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
        /** Support for this Entity is being deprecated starting May 2026 & will no longer be supported. */
        public ?string $userPrincipalName = null
    ) {}
}
