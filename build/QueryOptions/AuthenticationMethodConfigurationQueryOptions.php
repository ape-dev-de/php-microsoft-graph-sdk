<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class AuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodConfiguration
     */

    /**
     * Select specific AuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
