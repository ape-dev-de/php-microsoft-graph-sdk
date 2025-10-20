<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantDataSecurityAndGovernance resources
 *
 * Available select fields:
 * - protectionScopes
 */
class TenantDataSecurityAndGovernanceQueryOptions extends QueryOptions
{
    public const FIELD_PROTECTION_SCOPES = 'protectionScopes';

    /**
     * Select specific TenantDataSecurityAndGovernance properties
     * 
     * @param array<string> $select Use TenantDataSecurityAndGovernanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
