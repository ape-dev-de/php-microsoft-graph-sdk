<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeDefinitionMetadataEntryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AttributeDefinitionMetadataEntryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeDefinitionMetadataEntryCollectionResponse properties
     * 
     * @param array<string> $select Use AttributeDefinitionMetadataEntryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
