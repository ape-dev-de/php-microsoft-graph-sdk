<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BucketAggregationDefinition
 */
class BucketAggregationDefinition
{
    public function __construct(
        /** True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional. */
        public ?bool $isDescending = null,
        /** The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional. */
        public ?float $minimumCount = null,
        /** A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional. */
        public ?string $prefixFilter = null,
        /** Specifies the manual ranges to compute the aggregations. This is only valid for nonstring refiners of date or numeric type. Optional. */
        public array $ranges = [],
        /**  */
        public ?string $sortBy = null
    ) {}
}
