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
    /**
     * Available select fields for AttributeDefinitionMetadataEntry
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AttributeDefinitionMetadataEntry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
