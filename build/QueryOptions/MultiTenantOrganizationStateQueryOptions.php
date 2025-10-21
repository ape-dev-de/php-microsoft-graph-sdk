<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationState resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationState
     */

    /**
     * Select specific MultiTenantOrganizationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
