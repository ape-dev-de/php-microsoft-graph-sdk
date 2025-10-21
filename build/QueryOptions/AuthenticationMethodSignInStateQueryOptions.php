<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodSignInState resources
 *
 * Available select fields:
 */
class AuthenticationMethodSignInStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodSignInState
     */

    /**
     * Select specific AuthenticationMethodSignInState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
