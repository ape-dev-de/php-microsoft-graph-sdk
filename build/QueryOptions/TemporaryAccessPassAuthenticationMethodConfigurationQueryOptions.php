<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemporaryAccessPassAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class TemporaryAccessPassAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TemporaryAccessPassAuthenticationMethodConfiguration
     */

    /**
     * Select specific TemporaryAccessPassAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
