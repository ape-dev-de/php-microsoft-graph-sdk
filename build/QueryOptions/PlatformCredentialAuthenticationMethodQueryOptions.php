<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlatformCredentialAuthenticationMethod resources
 *
 * Available select fields:
 */
class PlatformCredentialAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlatformCredentialAuthenticationMethod
     */

    /**
     * Select specific PlatformCredentialAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
