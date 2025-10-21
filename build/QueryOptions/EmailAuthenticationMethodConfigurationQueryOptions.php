<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class EmailAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailAuthenticationMethodConfiguration
     */

    /**
     * Select specific EmailAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
