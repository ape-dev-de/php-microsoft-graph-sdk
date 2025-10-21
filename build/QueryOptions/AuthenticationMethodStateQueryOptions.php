<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodState resources
 *
 * Available select fields:
 */
class AuthenticationMethodStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodState
     */

    /**
     * Select specific AuthenticationMethodState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
