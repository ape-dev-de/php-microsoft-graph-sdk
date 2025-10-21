<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyAssignment
 */
class DeviceCompliancePolicyAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Target for the compliance policy assignment. */
        public ?string $target = null
    ) {}
}
