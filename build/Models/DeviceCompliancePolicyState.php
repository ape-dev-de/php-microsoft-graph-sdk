<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyState
 */
class DeviceCompliancePolicyState
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
        /** Device Compliance Policy State for a given device. */
        public ?string $version = null
    ) {}
}
