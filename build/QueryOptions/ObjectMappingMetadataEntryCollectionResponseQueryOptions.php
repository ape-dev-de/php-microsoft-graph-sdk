<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectMappingMetadataEntryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ObjectMappingMetadataEntryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectMappingMetadataEntryCollectionResponse properties
     * 
     * @param array<string> $select Use ObjectMappingMetadataEntryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
