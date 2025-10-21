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
    /**
     * Available select fields for ObjectDefinitionMetadataEntry
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectDefinitionMetadataEntry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
