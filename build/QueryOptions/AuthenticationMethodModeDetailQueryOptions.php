<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodModeDetail resources
 *
 * Available select fields:
 */
class AuthenticationMethodModeDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodModeDetail
     */

    /**
     * Select specific AuthenticationMethodModeDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
