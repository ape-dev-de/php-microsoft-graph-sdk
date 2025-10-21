<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EventMessage resources
 *
 * Available select fields:
 * - endDateTime
 * - isAllDay
 * - isDelegated
 * - isOutOfDate
 * - location
 * - meetingMessageType
 * - recurrence
 * - startDateTime
 * - type
 * - event
 */
class EventMessageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EventMessage
     */
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_IS_ALL_DAY = 'isAllDay';
    public const FIELD_IS_DELEGATED = 'isDelegated';
    public const FIELD_IS_OUT_OF_DATE = 'isOutOfDate';
    public const FIELD_LOCATION = 'location';
    public const FIELD_MEETING_MESSAGE_TYPE = 'meetingMessageType';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_TYPE = 'type';
    public const FIELD_EVENT = 'event';

    /**
     * Select specific EventMessage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
