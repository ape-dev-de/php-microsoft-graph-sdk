<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BucketAggregationDefinition
 */
class BucketAggregationDefinition
{
    /** True to specify the sort order as descending. The default is false, with the sort order as ascending. Optional. */
    public ?bool $isDescending = null;

    /** The minimum number of items that should be present in the aggregation to be returned in a bucket. Optional. */
    public ?float $minimumCount = null;

    /** A filter to define a matching criteria. The key should start with the specified prefix to be returned in the response. Optional. */
    public ?string $prefixFilter = null;

    /** 
     * Specifies the manual ranges to compute the aggregations. This is only valid for nonstring refiners of date or numeric type. Optional.
     * @var BucketAggregationRange[]
     */
    public array $ranges = [];

    /**  */
    public ?BucketAggregationSortProperty $sortBy = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isDescending'])) {
            $this->isDescending = $data['isDescending'];
        }
        if (isset($data['minimumCount'])) {
            $this->minimumCount = $data['minimumCount'];
        }
        if (isset($data['prefixFilter'])) {
            $this->prefixFilter = $data['prefixFilter'];
        }
        if (isset($data['ranges'])) {
            $this->ranges = $data['ranges'];
        }
        if (isset($data['sortBy'])) {
            $this->sortBy = is_array($data['sortBy']) ? new BucketAggregationSortProperty($data['sortBy']) : $data['sortBy'];
        }
    }
}
