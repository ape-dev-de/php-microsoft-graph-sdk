<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthPolicy resources
 *
 * Available select fields:
 */
class AuthenticationStrengthPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationStrengthPolicy
     */

    /**
     * Select specific AuthenticationStrengthPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
