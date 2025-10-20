<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeDefinitionMetadataEntry resources
 *
 * Available select fields:
 * - key
 * - value
 */
class AttributeDefinitionMetadataEntryQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeDefinitionMetadataEntry properties
     * 
     * @param array<string> $select Use AttributeDefinitionMetadataEntryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
