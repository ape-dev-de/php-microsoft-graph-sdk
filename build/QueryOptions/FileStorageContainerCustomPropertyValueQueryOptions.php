<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileStorageContainerCustomPropertyValue resources
 *
 * Available select fields:
 * - isSearchable
 * - value
 */
class FileStorageContainerCustomPropertyValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileStorageContainerCustomPropertyValue
     */
    public const FIELD_IS_SEARCHABLE = 'isSearchable';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FileStorageContainerCustomPropertyValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
