<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BucketAggregationRange resources
 *
 * Available select fields:
 * - from
 * - to
 */
class BucketAggregationRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BucketAggregationRange
     */
    public const FIELD_FROM = 'from';
    public const FIELD_TO = 'to';

    /**
     * Select specific BucketAggregationRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
