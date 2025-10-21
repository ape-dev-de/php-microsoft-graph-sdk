<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchBucket resources
 *
 * Available select fields:
 * - aggregationFilterToken
 * - count
 * - key
 */
class SearchBucketQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchBucket
     */
    public const FIELD_AGGREGATION_FILTER_TOKEN = 'aggregationFilterToken';
    public const FIELD_COUNT = 'count';
    public const FIELD_KEY = 'key';

    /**
     * Select specific SearchBucket properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
