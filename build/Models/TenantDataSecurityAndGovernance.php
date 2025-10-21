<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantDataSecurityAndGovernance
 */
class TenantDataSecurityAndGovernance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $sensitivityLabels = [],
        /**  */
        public ?TenantProtectionScopeContainer $protectionScopes = null
    ) {}
}
