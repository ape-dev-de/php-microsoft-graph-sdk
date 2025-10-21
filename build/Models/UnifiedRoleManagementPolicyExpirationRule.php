<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicyExpirationRule
 */
class UnifiedRoleManagementPolicyExpirationRule
{
    public function __construct(
        /** Indicates whether expiration is required or if it's a permanently active assignment or eligibility. */
        public ?bool $isExpirationRequired = null,
        /** The maximum duration allowed for eligibility or assignment that isn't permanent. Required when isExpirationRequired is true. */
        public ?string $maximumDuration = null
    ) {}
}
