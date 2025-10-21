<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TodoTaskList resources
 *
 * Available select fields:
 * - displayName
 * - isOwner
 * - isShared
 * - wellknownListName
 * - extensions
 * - tasks
 */
class TodoTaskListQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TodoTaskList
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_OWNER = 'isOwner';
    public const FIELD_IS_SHARED = 'isShared';
    public const FIELD_WELLKNOWN_LIST_NAME = 'wellknownListName';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_TASKS = 'tasks';

    /**
     * Select specific TodoTaskList properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
