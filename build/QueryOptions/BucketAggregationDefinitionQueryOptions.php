<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BucketAggregationDefinition resources
 *
 * Available select fields:
 * - isDescending
 * - minimumCount
 * - prefixFilter
 * - ranges
 * - sortBy
 */
class BucketAggregationDefinitionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BucketAggregationDefinition
     */
    public const FIELD_IS_DESCENDING = 'isDescending';
    public const FIELD_MINIMUM_COUNT = 'minimumCount';
    public const FIELD_PREFIX_FILTER = 'prefixFilter';
    public const FIELD_RANGES = 'ranges';
    public const FIELD_SORT_BY = 'sortBy';

    /**
     * Select specific BucketAggregationDefinition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
