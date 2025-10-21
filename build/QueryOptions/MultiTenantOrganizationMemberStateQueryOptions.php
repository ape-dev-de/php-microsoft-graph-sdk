<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMemberState resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationMemberStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationMemberState
     */

    /**
     * Select specific MultiTenantOrganizationMemberState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
