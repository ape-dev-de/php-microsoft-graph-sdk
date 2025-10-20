<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryObject resources
 *
 * Available select fields:
 * - deletedDateTime
 */
class DirectoryObjectQueryOptions extends QueryOptions
{
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';

    /**
     * Select specific DirectoryObject properties
     * 
     * @param array<string> $select Use DirectoryObjectQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
