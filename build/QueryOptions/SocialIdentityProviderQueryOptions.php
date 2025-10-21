<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SocialIdentityProvider resources
 *
 * Available select fields:
 */
class SocialIdentityProviderQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SocialIdentityProvider
     */

    /**
     * Select specific SocialIdentityProvider properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
