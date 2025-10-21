<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantAppManagementPolicy resources
 *
 * Available select fields:
 */
class TenantAppManagementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TenantAppManagementPolicy
     */

    /**
     * Select specific TenantAppManagementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
