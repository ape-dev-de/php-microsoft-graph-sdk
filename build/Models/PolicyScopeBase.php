<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyScopeBase
 */
class PolicyScopeBase
{
    public function __construct(
        /**  */
        public ?string $activities = null,
        /**  */
        public ?string $executionMode = null,
        /** The locations (like domains or URLs) to be protected. Required. */
        public array $locations = [],
        /** The enforcement actions to take if the policy conditions are met within this scope. Required. */
        public array $policyActions = []
    ) {}
}
