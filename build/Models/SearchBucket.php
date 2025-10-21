<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchBucket
 */
class SearchBucket
{
    public function __construct(
        /** A token containing the encoded filter to aggregate search matches by the specific key value. To use the filter, pass the token as part of the aggregationFilter property in a searchRequest object, in the format '{field}:/'{aggregationFilterToken}/''. See an example. */
        public ?string $aggregationFilterToken = null,
        /** The approximate number of search matches that share the same value specified in the key property. Note that this number is not the exact number of matches. */
        public ?float $count = null,
        /** The discrete value of the field that an aggregation was computed on. */
        public ?string $key = null
    ) {}
}
