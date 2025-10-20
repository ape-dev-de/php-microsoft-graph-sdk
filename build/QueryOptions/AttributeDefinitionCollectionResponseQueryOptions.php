<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttributeDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use AttributeDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
