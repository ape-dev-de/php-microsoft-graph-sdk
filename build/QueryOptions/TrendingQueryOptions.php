<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Trending resources
 *
 * Available select fields:
 */
class TrendingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Trending
     */

    /**
     * Select specific Trending properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
