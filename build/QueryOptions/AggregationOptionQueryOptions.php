<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AggregationOption resources
 *
 * Available select fields:
 * - bucketDefinition
 * - field
 * - size
 */
class AggregationOptionQueryOptions extends QueryOptions
{
    public const FIELD_BUCKET_DEFINITION = 'bucketDefinition';
    public const FIELD_FIELD = 'field';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific AggregationOption properties
     * 
     * @param array<string> $select Use AggregationOptionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
