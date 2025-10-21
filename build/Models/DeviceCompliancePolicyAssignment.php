<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicyAssignment
 */
class DeviceCompliancePolicyAssignment
{
    public function __construct(
        /** Device compliance policy assignment. */
        public ?string $target = null
    ) {}
}
