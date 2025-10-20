<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RecentNotebook resources
 *
 * Available select fields:
 * - displayName
 * - lastAccessedTime
 * - links
 * - sourceService
 */
class RecentNotebookQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_ACCESSED_TIME = 'lastAccessedTime';
    public const FIELD_LINKS = 'links';
    public const FIELD_SOURCE_SERVICE = 'sourceService';

    /**
     * Select specific RecentNotebook properties
     * 
     * @param array<string> $select Use RecentNotebookQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
