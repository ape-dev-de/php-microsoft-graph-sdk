<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BucketAggregationRangeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BucketAggregationRangeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BucketAggregationRangeCollectionResponse properties
     * 
     * @param array<string> $select Use BucketAggregationRangeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
