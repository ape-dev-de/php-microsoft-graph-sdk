<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SortPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SortPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SortPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use SortPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
