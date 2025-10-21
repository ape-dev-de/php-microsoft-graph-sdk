<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SoftwareOathAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class SoftwareOathAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SoftwareOathAuthenticationMethodConfiguration
     */

    /**
     * Select specific SoftwareOathAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
