<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Event resources
 *
 * Available select fields:
 * - allowNewTimeProposals
 * - attendees
 * - body
 * - bodyPreview
 * - cancelledOccurrences
 * - end
 * - hasAttachments
 * - hideAttendees
 * - iCalUId
 * - importance
 * - isAllDay
 * - isCancelled
 * - isDraft
 * - isOnlineMeeting
 * - isOrganizer
 * - isReminderOn
 * - location
 * - locations
 * - onlineMeeting
 * - onlineMeetingProvider
 * - onlineMeetingUrl
 * - organizer
 * - originalEndTimeZone
 * - originalStart
 * - originalStartTimeZone
 * - recurrence
 * - reminderMinutesBeforeStart
 * - responseRequested
 * - responseStatus
 * - sensitivity
 * - seriesMasterId
 * - showAs
 * - start
 * - subject
 * - transactionId
 * - type
 * - webLink
 * - attachments
 * - calendar
 * - exceptionOccurrences
 * - extensions
 * - instances
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class EventQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_NEW_TIME_PROPOSALS = 'allowNewTimeProposals';
    public const FIELD_ATTENDEES = 'attendees';
    public const FIELD_BODY = 'body';
    public const FIELD_BODY_PREVIEW = 'bodyPreview';
    public const FIELD_CANCELLED_OCCURRENCES = 'cancelledOccurrences';
    public const FIELD_END = 'end';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_HIDE_ATTENDEES = 'hideAttendees';
    public const FIELD_I_CAL_UID = 'iCalUId';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_IS_ALL_DAY = 'isAllDay';
    public const FIELD_IS_CANCELLED = 'isCancelled';
    public const FIELD_IS_DRAFT = 'isDraft';
    public const FIELD_IS_ONLINE_MEETING = 'isOnlineMeeting';
    public const FIELD_IS_ORGANIZER = 'isOrganizer';
    public const FIELD_IS_REMINDER_ON = 'isReminderOn';
    public const FIELD_LOCATION = 'location';
    public const FIELD_LOCATIONS = 'locations';
    public const FIELD_ONLINE_MEETING = 'onlineMeeting';
    public const FIELD_ONLINE_MEETING_PROVIDER = 'onlineMeetingProvider';
    public const FIELD_ONLINE_MEETING_URL = 'onlineMeetingUrl';
    public const FIELD_ORGANIZER = 'organizer';
    public const FIELD_ORIGINAL_END_TIME_ZONE = 'originalEndTimeZone';
    public const FIELD_ORIGINAL_START = 'originalStart';
    public const FIELD_ORIGINAL_START_TIME_ZONE = 'originalStartTimeZone';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_REMINDER_MINUTES_BEFORE_START = 'reminderMinutesBeforeStart';
    public const FIELD_RESPONSE_REQUESTED = 'responseRequested';
    public const FIELD_RESPONSE_STATUS = 'responseStatus';
    public const FIELD_SENSITIVITY = 'sensitivity';
    public const FIELD_SERIES_MASTER_ID = 'seriesMasterId';
    public const FIELD_SHOW_AS = 'showAs';
    public const FIELD_START = 'start';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TRANSACTION_ID = 'transactionId';
    public const FIELD_TYPE = 'type';
    public const FIELD_WEB_LINK = 'webLink';
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_CALENDAR = 'calendar';
    public const FIELD_EXCEPTION_OCCURRENCES = 'exceptionOccurrences';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_INSTANCES = 'instances';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific Event properties
     * 
     * @param array<string> $select Use EventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
