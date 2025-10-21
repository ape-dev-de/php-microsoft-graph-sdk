<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTenantScope
 */
class PolicyTenantScope
{
    public function __construct(
        /** Specifies the users and groups included in or excluded from this tenant-level policy scope. */
        public ?string $policyScope = null
    ) {}
}
