<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessPolicyState resources
 *
 * Available select fields:
 */
class ConditionalAccessPolicyStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessPolicyState
     */

    /**
     * Select specific ConditionalAccessPolicyState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
