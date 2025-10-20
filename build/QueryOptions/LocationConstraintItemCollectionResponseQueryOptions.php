<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocationConstraintItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class LocationConstraintItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific LocationConstraintItemCollectionResponse properties
     * 
     * @param array<string> $select Use LocationConstraintItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
