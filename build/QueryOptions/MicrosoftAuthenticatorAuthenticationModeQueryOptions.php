<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMode resources
 *
 * Available select fields:
 */
class MicrosoftAuthenticatorAuthenticationModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAuthenticatorAuthenticationMode
     */

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
