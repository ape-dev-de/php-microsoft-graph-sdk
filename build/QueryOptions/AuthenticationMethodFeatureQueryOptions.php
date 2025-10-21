<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationMethodFeature resources
 *
 * Available select fields:
 */
class AuthenticationMethodFeatureQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationMethodFeature
     */

    /**
     * Select specific AuthenticationMethodFeature properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
