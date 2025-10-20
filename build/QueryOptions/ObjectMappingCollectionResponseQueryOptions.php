<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectMappingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ObjectMappingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectMappingCollectionResponse properties
     * 
     * @param array<string> $select Use ObjectMappingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
