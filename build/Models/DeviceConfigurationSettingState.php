<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationSettingState
 */
class DeviceConfigurationSettingState
{
    public function __construct(
        /** Current value of setting on device */
        public ?string $currentValue = null,
        /** Error code for the setting */
        public ?float $errorCode = null,
        /** Error description */
        public ?string $errorDescription = null,
        /** Name of setting instance that is being reported. */
        public ?string $instanceDisplayName = null,
        /** The setting that is being reported */
        public ?string $setting = null,
        /** Localized/user friendly setting name that is being reported */
        public ?string $settingName = null,
        /** Contributing policies */
        public array $sources = [],
        /**  */
        public ?string $state = null,
        /** UserEmail */
        public ?string $userEmail = null,
        /** UserId */
        public ?string $userId = null,
        /** UserName */
        public ?string $userName = null,
        /** Device Configuration Setting State for a given device. */
        public ?string $userPrincipalName = null
    ) {}
}
