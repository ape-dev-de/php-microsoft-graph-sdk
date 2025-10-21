<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantAppManagementPolicy
 */
class TenantAppManagementPolicy
{
    public function __construct(
        /** Restrictions that apply as default to all application objects in the tenant. */
        public ?string $applicationRestrictions = null,
        /** Denotes whether the policy is enabled. Default value is false. */
        public ?bool $isEnabled = null,
        /** Restrictions that apply as default to all service principal objects in the tenant. */
        public ?string $servicePrincipalRestrictions = null
    ) {}
}
