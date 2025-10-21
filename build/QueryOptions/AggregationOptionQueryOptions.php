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
    /**
     * Available select fields for AggregationOption
     */
    public const FIELD_BUCKET_DEFINITION = 'bucketDefinition';
    public const FIELD_FIELD = 'field';
    public const FIELD_SIZE = 'size';

    /**
     * Select specific AggregationOption properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
