<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingMessageAction resources
 *
 * Available select fields:
 * - action
 * - actionType
 * - importance
 */
class CalendarSharingMessageActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingMessageAction
     */
    public const FIELD_ACTION = 'action';
    public const FIELD_ACTION_TYPE = 'actionType';
    public const FIELD_IMPORTANCE = 'importance';

    /**
     * Select specific CalendarSharingMessageAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
