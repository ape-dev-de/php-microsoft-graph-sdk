<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleManagement
 */
class RoleManagement
{
    public function __construct(
        /**  */
        public ?string $directory = null,
        /** Container for roles and assignments for entitlement management resources. */
        public ?string $entitlementManagement = null
    ) {}
}
