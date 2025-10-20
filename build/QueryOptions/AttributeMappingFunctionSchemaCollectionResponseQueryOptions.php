<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingFunctionSchemaCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttributeMappingFunctionSchemaCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeMappingFunctionSchemaCollectionResponse properties
     * 
     * @param array<string> $select Use AttributeMappingFunctionSchemaCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
