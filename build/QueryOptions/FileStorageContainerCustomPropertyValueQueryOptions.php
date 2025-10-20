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
    public const FIELD_IS_SEARCHABLE = 'isSearchable';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FileStorageContainerCustomPropertyValue properties
     * 
     * @param array<string> $select Use FileStorageContainerCustomPropertyValueQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
