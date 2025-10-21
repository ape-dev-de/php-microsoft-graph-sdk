<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthPolicyType resources
 *
 * Available select fields:
 */
class AuthenticationStrengthPolicyTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationStrengthPolicyType
     */

    /**
     * Select specific AuthenticationStrengthPolicyType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
