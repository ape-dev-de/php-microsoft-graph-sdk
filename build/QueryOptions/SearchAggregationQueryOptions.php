<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAggregation resources
 *
 * Available select fields:
 * - buckets
 * - field
 */
class SearchAggregationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchAggregation
     */
    public const FIELD_BUCKETS = 'buckets';
    public const FIELD_FIELD = 'field';

    /**
     * Select specific SearchAggregation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
