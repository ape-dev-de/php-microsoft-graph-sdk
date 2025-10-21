<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessAllExternalTenants resources
 *
 * Available select fields:
 */
class ConditionalAccessAllExternalTenantsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessAllExternalTenants
     */

    /**
     * Select specific ConditionalAccessAllExternalTenants properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
