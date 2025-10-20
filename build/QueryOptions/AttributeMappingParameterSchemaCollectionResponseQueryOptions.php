<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeMappingParameterSchemaCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttributeMappingParameterSchemaCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeMappingParameterSchemaCollectionResponse properties
     * 
     * @param array<string> $select Use AttributeMappingParameterSchemaCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
