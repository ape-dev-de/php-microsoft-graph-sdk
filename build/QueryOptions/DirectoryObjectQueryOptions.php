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
    /**
     * Available select fields for DirectoryObject
     */
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';

    /**
     * Select specific DirectoryObject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
