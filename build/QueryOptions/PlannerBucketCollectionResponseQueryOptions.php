<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerBucketCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PlannerBucketCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PlannerBucketCollectionResponse properties
     * 
     * @param array<string> $select Use PlannerBucketCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
