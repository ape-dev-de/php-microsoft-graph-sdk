<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Event
 */
class Event
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] The categories associated with the item */
        public array $categories = [],
        /** Identifies the version of the item. Every time the item is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
        public ?string $changeKey = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. The default is true. */
        public ?bool $allowNewTimeProposals = null,
        /** The collection of attendees for the event. */
        public array $attendees = [],
        /** The body of the message associated with the event. It can be in HTML or text format. */
        public ?string $body = null,
        /** The preview of the message associated with the event. It's in text format. */
        public ?string $bodyPreview = null,
        /** @var string[] Contains occurrenceId property values of canceled instances in a recurring series, if the event is the series master. Instances in a recurring series that are canceled are called canceled occurences.Returned only on $select in a Get operation which specifies the ID (seriesMasterId property value) of a series master event. */
        public array $cancelledOccurrences = [],
        /** The date, time, and time zone that the event ends. By default, the end time is in UTC. */
        public ?string $end = null,
        /** Set to true if the event has attachments. */
        public ?bool $hasAttachments = null,
        /** When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. The default is false. */
        public ?bool $hideAttendees = null,
        /** A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only. */
        public ?string $iCalUId = null,
        /** The importance of the event. The possible values are: low, normal, high. */
        public ?string $importance = null,
        /** Set to true if the event lasts all day. If true, regardless of whether it's a single-day or multi-day event, start, and endtime must be set to midnight and be in the same time zone. */
        public ?bool $isAllDay = null,
        /** Set to true if the event has been canceled. */
        public ?bool $isCancelled = null,
        /** Set to true if the user has updated the meeting in Outlook but hasn't sent the updates to attendees. Set to false if all changes are sent, or if the event is an appointment without any attendees. */
        public ?bool $isDraft = null,
        /** True if this event has online meeting information (that is, onlineMeeting points to an onlineMeetingInfo resource), false otherwise. Default is false (onlineMeeting is null). Optional.  After you set isOnlineMeeting to true, Microsoft Graph initializes onlineMeeting. Subsequently, Outlook ignores any further changes to isOnlineMeeting, and the meeting remains available online. */
        public ?bool $isOnlineMeeting = null,
        /** Set to true if the calendar owner (specified by the owner property of the calendar) is the organizer of the event (specified by the organizer property of the event). It also applies if a delegate organized the event on behalf of the owner. */
        public ?bool $isOrganizer = null,
        /** Set to true if an alert is set to remind the user of the event. */
        public ?bool $isReminderOn = null,
        /** The location of the event. */
        public ?string $location = null,
        /** The locations where the event is held or attended from. The location and locations properties always correspond with each other. If you update the location property, any prior locations in the locations collection are removed and replaced by the new location value. */
        public array $locations = [],
        /** Details for an attendee to join the meeting online. The default is null. Read-only. After you set the isOnlineMeeting and onlineMeetingProvider properties to enable a meeting online, Microsoft Graph initializes onlineMeeting. When set, the meeting remains available online, and you can't change the isOnlineMeeting, onlineMeetingProvider, and onlneMeeting properties again. */
        public ?string $onlineMeeting = null,
        /** Represents the online meeting service provider. By default, onlineMeetingProvider is unknown. The possible values are unknown, teamsForBusiness, skypeForBusiness, and skypeForConsumer. Optional.  After you set onlineMeetingProvider, Microsoft Graph initializes onlineMeeting. Subsequently, you can't change onlineMeetingProvider again, and the meeting remains available online. */
        public ?string $onlineMeetingProvider = null,
        /** A URL for an online meeting. The property is set only when an organizer specifies in Outlook that an event is an online meeting such as Skype. Read-only.To access the URL to join an online meeting, use joinUrl which is exposed via the onlineMeeting property of the event. The onlineMeetingUrl property will be deprecated in the future. */
        public ?string $onlineMeetingUrl = null,
        /** The organizer of the event. */
        public ?string $organizer = null,
        /** The end time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook. */
        public ?string $originalEndTimeZone = null,
        /** Represents the start time of an event when it's initially created as an occurrence or exception in a recurring series. This property is not returned for events that are single instances. Its date and time information is expressed in ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $originalStart = null,
        /** The start time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook. */
        public ?string $originalStartTimeZone = null,
        /** The recurrence pattern for the event. */
        public ?string $recurrence = null,
        /** The number of minutes before the event start time that the reminder alert occurs. */
        public ?float $reminderMinutesBeforeStart = null,
        /** Default is true, which represents the organizer would like an invitee to send a response to the event. */
        public ?bool $responseRequested = null,
        /** Indicates the type of response sent in response to an event message. */
        public ?string $responseStatus = null,
        /** Possible values are: normal, personal, private, and confidential. */
        public ?string $sensitivity = null,
        /** The ID for the recurring series master item, if this event is part of a recurring series. */
        public ?string $seriesMasterId = null,
        /** The status to show. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown. */
        public ?string $showAs = null,
        /** The start date, time, and time zone of the event. By default, the start time is in UTC. */
        public ?string $start = null,
        /** The text of the event's subject line. */
        public ?string $subject = null,
        /** A custom identifier specified by a client app for the server to avoid redundant POST operations in case of client retries to create the same event. It's useful when low network connectivity causes the client to time out before receiving a response from the server for the client's prior create-event request. After you set transactionId when creating an event, you can't change transactionId in a subsequent update. This property is only returned in a response payload if an app has set it. Optional. */
        public ?string $transactionId = null,
        /** The event type. Possible values are: singleInstance, occurrence, exception, seriesMaster. Read-only */
        public ?string $type = null,
        /** The URL to open the event in Outlook on the web.Outlook on the web opens the event in the browser if you are signed in to your mailbox. Otherwise, Outlook on the web prompts you to sign in.This URL can't be accessed from within an iFrame. */
        public ?string $webLink = null,
        /** The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable. */
        public array $attachments = [],
        /** The calendar that contains the event. Navigation property. Read-only. */
        public ?string $calendar = null,
        /** Contains the id property values of the event instances that are exceptions in a recurring series.Exceptions can differ from other occurrences in a recurring series, such as the subject, start or end times, or attendees. Exceptions don't include canceled occurrences.Returned only on $select and $expand in a GET operation that specifies the ID (seriesMasterId property value) of a series master event. */
        public array $exceptionOccurrences = [],
        /** The collection of open extensions defined for the event. Nullable. */
        public array $extensions = [],
        /** The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions modified, but doesn't include occurrences canceled from the series. Navigation property. Read-only. Nullable. */
        public array $instances = [],
        /** The collection of multi-value extended properties defined for the event. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** The collection of single-value extended properties defined for the event. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
