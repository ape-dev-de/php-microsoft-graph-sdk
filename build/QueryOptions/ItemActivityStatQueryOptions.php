<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemActivityStat resources
 *
 * Available select fields:
 * - access
 * - create
 * - delete
 * - edit
 * - endDateTime
 * - incompleteData
 * - isTrending
 * - move
 * - startDateTime
 * - activities
 */
class ItemActivityStatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemActivityStat
     */
    public const FIELD_ACCESS = 'access';
    public const FIELD_CREATE = 'create';
    public const FIELD_DELETE = 'delete';
    public const FIELD_EDIT = 'edit';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_INCOMPLETE_DATA = 'incompleteData';
    public const FIELD_IS_TRENDING = 'isTrending';
    public const FIELD_MOVE = 'move';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_ACTIVITIES = 'activities';

    /**
     * Select specific ItemActivityStat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
