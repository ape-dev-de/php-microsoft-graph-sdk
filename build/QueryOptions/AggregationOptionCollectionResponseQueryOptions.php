<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AggregationOptionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AggregationOptionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AggregationOptionCollectionResponse properties
     * 
     * @param array<string> $select Use AggregationOptionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
