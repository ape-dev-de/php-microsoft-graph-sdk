<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedDeviceMobileAppConfigurationDeviceStatus
 */
class ManagedDeviceMobileAppConfigurationDeviceStatus
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
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
        /** Contains properties, inherited properties and actions for an MDM mobile app configuration status for a device. */
        public ?string $userPrincipalName = null
    ) {}
}
