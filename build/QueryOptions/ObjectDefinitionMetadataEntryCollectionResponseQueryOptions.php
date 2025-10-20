<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectDefinitionMetadataEntryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ObjectDefinitionMetadataEntryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectDefinitionMetadataEntryCollectionResponse properties
     * 
     * @param array<string> $select Use ObjectDefinitionMetadataEntryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
