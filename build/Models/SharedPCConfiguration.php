<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedPCConfiguration
 */
class SharedPCConfiguration
{
    public function __construct(
        /** Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false. */
        public ?string $accountManagerPolicy = null,
        /**  */
        public ?string $allowedAccounts = null,
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
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the sharedPCConfiguration resource. */
        public ?string $maintenanceStartTime = null
    ) {}
}
