<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyB2BSetting
 */
class CrossTenantAccessPolicyB2BSetting
{
    public function __construct(
        /** The list of applications targeted with your cross-tenant access policy. */
        public ?string $applications = null,
        /** The list of users and groups targeted with your cross-tenant access policy. */
        public ?string $usersAndGroups = null
    ) {}
}
