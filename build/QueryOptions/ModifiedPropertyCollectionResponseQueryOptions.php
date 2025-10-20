<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ModifiedPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ModifiedPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ModifiedPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use ModifiedPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
