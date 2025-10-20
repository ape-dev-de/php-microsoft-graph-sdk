<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectDefinitionMetadataEntry resources
 *
 * Available select fields:
 * - key
 * - value
 */
class ObjectDefinitionMetadataEntryQueryOptions extends QueryOptions
{
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectDefinitionMetadataEntry properties
     * 
     * @param array<string> $select Use ObjectDefinitionMetadataEntryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
