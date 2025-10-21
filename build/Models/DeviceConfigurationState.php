<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationState
 */
class DeviceConfigurationState
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The name of the policy for this policyBase */
        public ?string $displayName = null,
        /**  */
        public ?string $platformType = null,
        /** Count of how many setting a policy holds */
        public ?float $settingCount = null,
        /**  */
        public array $settingStates = [],
        /**  */
        public ?string $state = null,
        /** Support for this Entity is being deprecated starting May 2026 & will no longer be supported. */
        public ?string $version = null
    ) {}
}
