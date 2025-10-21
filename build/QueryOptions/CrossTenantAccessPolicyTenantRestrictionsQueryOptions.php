<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTenantRestrictions resources
 *
 * Available select fields:
 */
class CrossTenantAccessPolicyTenantRestrictionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantAccessPolicyTenantRestrictions
     */

    /**
     * Select specific CrossTenantAccessPolicyTenantRestrictions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
