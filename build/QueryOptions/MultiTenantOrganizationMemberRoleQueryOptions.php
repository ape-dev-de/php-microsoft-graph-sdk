<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMemberRole resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationMemberRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationMemberRole
     */

    /**
     * Select specific MultiTenantOrganizationMemberRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
