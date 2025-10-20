<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricLevelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RubricLevelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RubricLevelCollectionResponse properties
     * 
     * @param array<string> $select Use RubricLevelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
