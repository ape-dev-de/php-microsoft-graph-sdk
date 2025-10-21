<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EntitlementManagement resources
 *
 * Available select fields:
 */
class EntitlementManagementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EntitlementManagement
     */

    /**
     * Select specific EntitlementManagement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
