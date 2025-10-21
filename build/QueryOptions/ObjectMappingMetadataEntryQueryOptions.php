<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ObjectMappingMetadataEntry resources
 *
 * Available select fields:
 * - key
 * - value
 */
class ObjectMappingMetadataEntryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ObjectMappingMetadataEntry
     */
    public const FIELD_KEY = 'key';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ObjectMappingMetadataEntry properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
