<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReferencedObjectCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ReferencedObjectCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ReferencedObjectCollectionResponse properties
     * 
     * @param array<string> $select Use ReferencedObjectCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
