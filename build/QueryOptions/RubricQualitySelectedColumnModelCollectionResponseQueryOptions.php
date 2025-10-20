<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricQualitySelectedColumnModelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RubricQualitySelectedColumnModelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RubricQualitySelectedColumnModelCollectionResponse properties
     * 
     * @param array<string> $select Use RubricQualitySelectedColumnModelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
