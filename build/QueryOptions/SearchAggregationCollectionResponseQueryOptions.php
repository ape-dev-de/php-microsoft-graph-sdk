<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAggregationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchAggregationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchAggregationCollectionResponse properties
     * 
     * @param array<string> $select Use SearchAggregationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
