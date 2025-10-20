<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StringKeyAttributeMappingSourceValuePairCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class StringKeyAttributeMappingSourceValuePairCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific StringKeyAttributeMappingSourceValuePairCollectionResponse properties
     * 
     * @param array<string> $select Use StringKeyAttributeMappingSourceValuePairCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
