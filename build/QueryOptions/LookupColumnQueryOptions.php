<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LookupColumn resources
 *
 * Available select fields:
 * - allowMultipleValues
 * - allowUnlimitedLength
 * - columnName
 * - listId
 * - primaryLookupColumnId
 */
class LookupColumnQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_MULTIPLE_VALUES = 'allowMultipleValues';
    public const FIELD_ALLOW_UNLIMITED_LENGTH = 'allowUnlimitedLength';
    public const FIELD_COLUMN_NAME = 'columnName';
    public const FIELD_LIST_ID = 'listId';
    public const FIELD_PRIMARY_LOOKUP_COLUMN_ID = 'primaryLookupColumnId';

    /**
     * Select specific LookupColumn properties
     * 
     * @param array<string> $select Use LookupColumnQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
