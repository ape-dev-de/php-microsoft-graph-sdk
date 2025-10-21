<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HomeRealmDiscoveryPolicy resources
 *
 * Available select fields:
 */
class HomeRealmDiscoveryPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HomeRealmDiscoveryPolicy
     */

    /**
     * Select specific HomeRealmDiscoveryPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
