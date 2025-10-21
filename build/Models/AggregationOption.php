<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AggregationOption
 */
class AggregationOption
{
    public function __construct(
        /**  */
        public ?string $bucketDefinition = null,
        /** Computes aggregation on the field while the field exists in the current entity type. Required. */
        public ?string $field = null,
        /** The number of searchBucket resources to be returned. This isn't required when the range is provided manually in the search request. The minimum accepted size is 1, and the maximum is 65535. Optional. */
        public ?float $size = null
    ) {}
}
