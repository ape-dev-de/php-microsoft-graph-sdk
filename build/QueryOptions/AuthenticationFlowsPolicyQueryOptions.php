<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationFlowsPolicy resources
 *
 * Available select fields:
 */
class AuthenticationFlowsPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationFlowsPolicy
     */

    /**
     * Select specific AuthenticationFlowsPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
