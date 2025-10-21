<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTenantScope
 */
class PolicyTenantScope
{
    public function __construct(
        /**  */
        public ?UserActivityTypes $activities = null,
        /**  */
        public ?ExecutionMode $executionMode = null,
        /** The locations (like domains or URLs) to be protected. Required. */
        public array $locations = [],
        /** The enforcement actions to take if the policy conditions are met within this scope. Required. */
        public array $policyActions = [],
        /** Specifies the users and groups included in or excluded from this tenant-level policy scope. */
        public ?PolicyBinding $policyScope = null
    ) {}
}
