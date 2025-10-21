<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationCombinationConfiguration resources
 *
 * Available select fields:
 */
class AuthenticationCombinationConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationCombinationConfiguration
     */

    /**
     * Select specific AuthenticationCombinationConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
