<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCConfiguration
 */
class SharedPCConfiguration
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
        public ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null,
        /** Device configuration installation status by user. */
        public array $userStatuses = [],
        /** Device Configuration users status overview */
        public ?DeviceConfigurationUserOverview $userStatusOverview = null,
        /** Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false. */
        public ?SharedPCAccountManagerPolicy $accountManagerPolicy = null,
        /**  */
        public ?SharedPCAllowedAccountType $allowedAccounts = null,
        /** Specifies whether local storage is allowed on a shared PC. */
        public ?bool $allowLocalStorage = null,
        /** Disables the account manager for shared PC mode. */
        public ?bool $disableAccountManager = null,
        /** Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true. */
        public ?bool $disableEduPolicies = null,
        /** Specifies whether the default shared PC power policies should be disabled. */
        public ?bool $disablePowerPolicies = null,
        /** Disables the requirement to sign in whenever the device wakes up from sleep mode. */
        public ?bool $disableSignInOnResume = null,
        /** Enables shared PC mode and applies the shared pc policies. */
        public ?bool $enabled = null,
        /** Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring. */
        public ?float $idleTimeBeforeSleepInSeconds = null,
        /** Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set. */
        public ?string $kioskAppDisplayName = null,
        /** Specifies the application user model ID of the app to use with assigned access. */
        public ?string $kioskAppUserModelId = null,
        /** Specifies the daily start time of maintenance hour. */
        public ?string $maintenanceStartTime = null
    ) {}
}
