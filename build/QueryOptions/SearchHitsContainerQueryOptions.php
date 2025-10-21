<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchHitsContainer resources
 *
 * Available select fields:
 * - aggregations
 * - hits
 * - moreResultsAvailable
 * - total
 */
class SearchHitsContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SearchHitsContainer
     */
    public const FIELD_AGGREGATIONS = 'aggregations';
    public const FIELD_HITS = 'hits';
    public const FIELD_MORE_RESULTS_AVAILABLE = 'moreResultsAvailable';
    public const FIELD_TOTAL = 'total';

    /**
     * Select specific SearchHitsContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
