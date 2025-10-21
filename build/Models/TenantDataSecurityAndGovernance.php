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
        /** @var string[]  */
        public array $sensitivityLabels = [],
        /**  */
        public ?string $protectionScopes = null
    ) {}
}
