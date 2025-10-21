<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodConfiguration resources
 *
 * Available select fields:
 */
class MicrosoftAuthenticatorAuthenticationMethodConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAuthenticatorAuthenticationMethodConfiguration
     */

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
