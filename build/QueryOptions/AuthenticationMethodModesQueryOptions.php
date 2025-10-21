<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodModes resources
 *
 * Available select fields:
 */
class AuthenticationMethodModesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodModes
     */

    /**
     * Select specific AuthenticationMethodModes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
