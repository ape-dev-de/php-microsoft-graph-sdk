<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantDataSecurityAndGovernance resources
 *
 * Available select fields:
 */
class TenantDataSecurityAndGovernanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TenantDataSecurityAndGovernance
     */

    /**
     * Select specific TenantDataSecurityAndGovernance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
