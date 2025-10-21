<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTenantRestrictions
 */
class CrossTenantAccessPolicyTenantRestrictions
{
    public function __construct(
        /** The list of applications targeted with your cross-tenant access policy. */
        public ?CrossTenantAccessPolicyTargetConfiguration $applications = null,
        /** The list of users and groups targeted with your cross-tenant access policy. */
        public ?CrossTenantAccessPolicyTargetConfiguration $usersAndGroups = null,
        /** Defines the rule for filtering devices and whether devices that satisfy the rule should be allowed or blocked. This property isn't supported on the server side yet. */
        public ?DevicesFilter $devices = null
    ) {}
}
