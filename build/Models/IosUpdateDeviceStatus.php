<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosUpdateDeviceStatus
 */
class IosUpdateDeviceStatus
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The DateTime when device compliance grace period expires */
        public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null,
        /** Device name of the DevicePolicyStatus. */
        public ?string $deviceDisplayName = null,
        /** The device id that is being reported. */
        public ?string $deviceId = null,
        /** The device model that is being reported */
        public ?string $deviceModel = null,
        /**  */
        public ?IosUpdatesInstallStatus $installStatus = null,
        /** Last modified date time of the policy report. */
        public ?\DateTimeInterface $lastReportedDateTime = null,
        /** The device version that is being reported. */
        public ?string $osVersion = null,
        /**  */
        public ?ComplianceStatus $status = null,
        /** The User id that is being reported. */
        public ?string $userId = null,
        /** The User Name that is being reported */
        public ?string $userName = null,
        /** UserPrincipalName. */
        public ?string $userPrincipalName = null
    ) {}
}
