<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTenantRestrictions
 */
class CrossTenantAccessPolicyTenantRestrictions
{
    public function __construct(
        /** Defines the rule for filtering devices and whether devices that satisfy the rule should be allowed or blocked. This property isn't supported on the server side yet. */
        public ?string $devices = null
    ) {}
}
