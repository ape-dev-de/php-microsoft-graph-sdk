<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethodTarget resources
 *
 * Available select fields:
 */
class MicrosoftAuthenticatorAuthenticationMethodTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftAuthenticatorAuthenticationMethodTarget
     */

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethodTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
