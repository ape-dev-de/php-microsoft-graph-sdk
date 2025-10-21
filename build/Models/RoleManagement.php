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
        public ?RbacApplication $directory = null,
        /** Container for roles and assignments for entitlement management resources. */
        public ?RbacApplication $entitlementManagement = null
    ) {}
}
