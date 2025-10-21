<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminCustomer resources
 *
 * Available select fields:
 */
class DelegatedAdminCustomerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminCustomer
     */

    /**
     * Select specific DelegatedAdminCustomer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
