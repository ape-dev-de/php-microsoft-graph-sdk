<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProviderBase resources
 *
 * Available select fields:
 */
class IdentityProviderBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityProviderBase
     */

    /**
     * Select specific IdentityProviderBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
