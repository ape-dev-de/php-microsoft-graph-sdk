<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMember resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationMember
     */

    /**
     * Select specific MultiTenantOrganizationMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
