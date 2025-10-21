<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharedPCAllowedAccountType resources
 *
 * Available select fields:
 */
class SharedPCAllowedAccountTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharedPCAllowedAccountType
     */

    /**
     * Select specific SharedPCAllowedAccountType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
