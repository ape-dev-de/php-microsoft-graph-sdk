<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileSystemInfo resources
 *
 * Available select fields:
 * - createdDateTime
 * - lastAccessedDateTime
 * - lastModifiedDateTime
 */
class FileSystemInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FileSystemInfo
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_ACCESSED_DATE_TIME = 'lastAccessedDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific FileSystemInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
