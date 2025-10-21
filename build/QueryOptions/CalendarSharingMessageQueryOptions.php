<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CalendarSharingMessage resources
 *
 * Available select fields:
 * - canAccept
 * - sharingMessageAction
 * - sharingMessageActions
 * - suggestedCalendarName
 */
class CalendarSharingMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CalendarSharingMessage
     */
    public const FIELD_CAN_ACCEPT = 'canAccept';
    public const FIELD_SHARING_MESSAGE_ACTION = 'sharingMessageAction';
    public const FIELD_SHARING_MESSAGE_ACTIONS = 'sharingMessageActions';
    public const FIELD_SUGGESTED_CALENDAR_NAME = 'suggestedCalendarName';

    /**
     * Select specific CalendarSharingMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
