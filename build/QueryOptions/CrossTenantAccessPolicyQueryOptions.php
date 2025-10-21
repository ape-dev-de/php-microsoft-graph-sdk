<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicy resources
 *
 * Available select fields:
 */
class CrossTenantAccessPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantAccessPolicy
     */

    /**
     * Select specific CrossTenantAccessPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
