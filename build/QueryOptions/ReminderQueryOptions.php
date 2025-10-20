<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Reminder resources
 *
 * Available select fields:
 * - changeKey
 * - eventEndTime
 * - eventId
 * - eventLocation
 * - eventStartTime
 * - eventSubject
 * - eventWebLink
 * - reminderFireTime
 */
class ReminderQueryOptions extends QueryOptions
{
    public const FIELD_CHANGE_KEY = 'changeKey';
    public const FIELD_EVENT_END_TIME = 'eventEndTime';
    public const FIELD_EVENT_ID = 'eventId';
    public const FIELD_EVENT_LOCATION = 'eventLocation';
    public const FIELD_EVENT_START_TIME = 'eventStartTime';
    public const FIELD_EVENT_SUBJECT = 'eventSubject';
    public const FIELD_EVENT_WEB_LINK = 'eventWebLink';
    public const FIELD_REMINDER_FIRE_TIME = 'reminderFireTime';

    /**
     * Select specific Reminder properties
     * 
     * @param array<string> $select Use ReminderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
