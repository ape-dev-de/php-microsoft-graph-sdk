<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppleManagedIdentityProvider resources
 *
 * Available select fields:
 */
class AppleManagedIdentityProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppleManagedIdentityProvider
     */

    /**
     * Select specific AppleManagedIdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
