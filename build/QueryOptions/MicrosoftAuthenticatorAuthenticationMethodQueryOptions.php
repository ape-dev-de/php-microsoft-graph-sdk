<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethod resources
 *
 * Available select fields:
 */
class MicrosoftAuthenticatorAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAuthenticatorAuthenticationMethod
     */

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
