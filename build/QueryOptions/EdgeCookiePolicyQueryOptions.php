<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EdgeCookiePolicy resources
 *
 * Available select fields:
 */
class EdgeCookiePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EdgeCookiePolicy
     */

    /**
     * Select specific EdgeCookiePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
