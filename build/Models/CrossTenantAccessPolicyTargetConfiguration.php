<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetConfiguration
 */
class CrossTenantAccessPolicyTargetConfiguration
{
    public function __construct(
        /** Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue. */
        public ?CrossTenantAccessPolicyTargetConfigurationAccessType $accessType = null,
        /** Specifies whether to target users, groups, or applications with this rule. */
        public array $targets = []
    ) {}
}
