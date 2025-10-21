<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Fido2AuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class Fido2AuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Fido2AuthenticationMethodConfiguration
     */

    /**
     * Select specific Fido2AuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
