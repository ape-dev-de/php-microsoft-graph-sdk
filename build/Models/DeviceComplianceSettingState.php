<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceComplianceSettingState
 */
class DeviceComplianceSettingState
{
    public function __construct(
        /** The DateTime when device compliance grace period expires */
        public ?\DateTimeInterface $complianceGracePeriodExpirationDateTime = null,
        /** The Device Id that is being reported */
        public ?string $deviceId = null,
        /** The device model that is being reported */
        public ?string $deviceModel = null,
        /** The Device Name that is being reported */
        public ?string $deviceName = null,
        /** The setting class name and property name. */
        public ?string $setting = null,
        /** The Setting Name that is being reported */
        public ?string $settingName = null,
        /**  */
        public ?string $state = null,
        /** The User email address that is being reported */
        public ?string $userEmail = null,
        /** The user Id that is being reported */
        public ?string $userId = null,
        /** The User Name that is being reported */
        public ?string $userName = null,
        /** Device compliance setting State for a given device. */
        public ?string $userPrincipalName = null
    ) {}
}
