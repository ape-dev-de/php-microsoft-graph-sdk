<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BucketAggregationSortProperty resources
 *
 * Available select fields:
 */
class BucketAggregationSortPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BucketAggregationSortProperty
     */

    /**
     * Select specific BucketAggregationSortProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
