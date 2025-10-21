<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthorizationPolicy resources
 *
 * Available select fields:
 */
class AuthorizationPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthorizationPolicy
     */

    /**
     * Select specific AuthorizationPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
