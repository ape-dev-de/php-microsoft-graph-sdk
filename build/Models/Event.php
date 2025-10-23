<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Event
 */
class Event
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The categories associated with the item
     * @var string[]
     */
    public array $categories = [];

    /** Identifies the version of the item. Every time the item is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only. */
    public ?string $changeKey = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. The default is true. */
    public ?bool $allowNewTimeProposals = null;

    /** 
     * The collection of attendees for the event.
     * @var Attendee[]
     */
    public array $attendees = [];

    /** 
     * The body of the message associated with the event. It can be in HTML or text format.
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** The preview of the message associated with the event. It's in text format. */
    public ?string $bodyPreview = null;

    /** 
     * Contains occurrenceId property values of canceled instances in a recurring series, if the event is the series master. Instances in a recurring series that are canceled are called canceled occurences.Returned only on $select in a Get operation which specifies the ID (seriesMasterId property value) of a series master event.
     * @var string[]
     */
    public array $cancelledOccurrences = [];

    /** 
     * The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $end = null;

    /** Set to true if the event has attachments. */
    public ?bool $hasAttachments = null;

    /** When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. The default is false. */
    public ?bool $hideAttendees = null;

    /** A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only. */
    public ?string $iCalUId = null;

    /** 
     * The importance of the event. The possible values are: low, normal, high.
     * @var Importance|\stdClass|null
     */
    public mixed $importance = null;

    /** Set to true if the event lasts all day. If true, regardless of whether it's a single-day or multi-day event, start, and endtime must be set to midnight and be in the same time zone. */
    public ?bool $isAllDay = null;

    /** Set to true if the event has been canceled. */
    public ?bool $isCancelled = null;

    /** Set to true if the user has updated the meeting in Outlook but hasn't sent the updates to attendees. Set to false if all changes are sent, or if the event is an appointment without any attendees. */
    public ?bool $isDraft = null;

    /** True if this event has online meeting information (that is, onlineMeeting points to an onlineMeetingInfo resource), false otherwise. Default is false (onlineMeeting is null). Optional.  After you set isOnlineMeeting to true, Microsoft Graph initializes onlineMeeting. Subsequently, Outlook ignores any further changes to isOnlineMeeting, and the meeting remains available online. */
    public ?bool $isOnlineMeeting = null;

    /** Set to true if the calendar owner (specified by the owner property of the calendar) is the organizer of the event (specified by the organizer property of the event). It also applies if a delegate organized the event on behalf of the owner. */
    public ?bool $isOrganizer = null;

    /** Set to true if an alert is set to remind the user of the event. */
    public ?bool $isReminderOn = null;

    /** 
     * The location of the event.
     * @var Location|\stdClass|null
     */
    public mixed $location = null;

    /** 
     * The locations where the event is held or attended from. The location and locations properties always correspond with each other. If you update the location property, any prior locations in the locations collection are removed and replaced by the new location value.
     * @var Location[]
     */
    public array $locations = [];

    /** 
     * Details for an attendee to join the meeting online. The default is null. Read-only. After you set the isOnlineMeeting and onlineMeetingProvider properties to enable a meeting online, Microsoft Graph initializes onlineMeeting. When set, the meeting remains available online, and you can't change the isOnlineMeeting, onlineMeetingProvider, and onlneMeeting properties again.
     * @var OnlineMeetingInfo|\stdClass|null
     */
    public mixed $onlineMeeting = null;

    /** 
     * Represents the online meeting service provider. By default, onlineMeetingProvider is unknown. The possible values are unknown, teamsForBusiness, skypeForBusiness, and skypeForConsumer. Optional.  After you set onlineMeetingProvider, Microsoft Graph initializes onlineMeeting. Subsequently, you can't change onlineMeetingProvider again, and the meeting remains available online.
     * @var OnlineMeetingProviderType|\stdClass|null
     */
    public mixed $onlineMeetingProvider = null;

    /** A URL for an online meeting. The property is set only when an organizer specifies in Outlook that an event is an online meeting such as Skype. Read-only.To access the URL to join an online meeting, use joinUrl which is exposed via the onlineMeeting property of the event. The onlineMeetingUrl property will be deprecated in the future. */
    public ?string $onlineMeetingUrl = null;

    /** 
     * The organizer of the event.
     * @var Recipient|\stdClass|null
     */
    public mixed $organizer = null;

    /** The end time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook. */
    public ?string $originalEndTimeZone = null;

    /** Represents the start time of an event when it's initially created as an occurrence or exception in a recurring series. This property is not returned for events that are single instances. Its date and time information is expressed in ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $originalStart = null;

    /** The start time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook. */
    public ?string $originalStartTimeZone = null;

    /** 
     * The recurrence pattern for the event.
     * @var PatternedRecurrence|\stdClass|null
     */
    public mixed $recurrence = null;

    /** The number of minutes before the event start time that the reminder alert occurs. */
    public ?float $reminderMinutesBeforeStart = null;

    /** Default is true, which represents the organizer would like an invitee to send a response to the event. */
    public ?bool $responseRequested = null;

    /** 
     * Indicates the type of response sent in response to an event message.
     * @var ResponseStatus|\stdClass|null
     */
    public mixed $responseStatus = null;

    /** 
     * Possible values are: normal, personal, private, and confidential.
     * @var Sensitivity|\stdClass|null
     */
    public mixed $sensitivity = null;

    /** The ID for the recurring series master item, if this event is part of a recurring series. */
    public ?string $seriesMasterId = null;

    /** 
     * The status to show. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @var FreeBusyStatus|\stdClass|null
     */
    public mixed $showAs = null;

    /** 
     * The start date, time, and time zone of the event. By default, the start time is in UTC.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $start = null;

    /** The text of the event's subject line. */
    public ?string $subject = null;

    /** A custom identifier specified by a client app for the server to avoid redundant POST operations in case of client retries to create the same event. It's useful when low network connectivity causes the client to time out before receiving a response from the server for the client's prior create-event request. After you set transactionId when creating an event, you can't change transactionId in a subsequent update. This property is only returned in a response payload if an app has set it. Optional. */
    public ?string $transactionId = null;

    /** 
     * The event type. Possible values are: singleInstance, occurrence, exception, seriesMaster. Read-only
     * @var EventType|\stdClass|null
     */
    public mixed $type = null;

    /** The URL to open the event in Outlook on the web.Outlook on the web opens the event in the browser if you are signed in to your mailbox. Otherwise, Outlook on the web prompts you to sign in.This URL can't be accessed from within an iFrame. */
    public ?string $webLink = null;

    /** 
     * The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     * @var Attachment[]
     */
    public array $attachments = [];

    /** 
     * The calendar that contains the event. Navigation property. Read-only.
     * @var Calendar|\stdClass|null
     */
    public mixed $calendar = null;

    /** 
     * Contains the id property values of the event instances that are exceptions in a recurring series.Exceptions can differ from other occurrences in a recurring series, such as the subject, start or end times, or attendees. Exceptions don't include canceled occurrences.Returned only on $select and $expand in a GET operation that specifies the ID (seriesMasterId property value) of a series master event.
     * @var Event[]
     */
    public array $exceptionOccurrences = [];

    /** 
     * The collection of open extensions defined for the event. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions modified, but doesn't include occurrences canceled from the series. Navigation property. Read-only. Nullable.
     * @var Event[]
     */
    public array $instances = [];

    /** 
     * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['changeKey'])) {
            $this->changeKey = $data['changeKey'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['allowNewTimeProposals'])) {
            $this->allowNewTimeProposals = $data['allowNewTimeProposals'];
        }
        if (isset($data['attendees'])) {
            $this->attendees = $data['attendees'];
        }
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['bodyPreview'])) {
            $this->bodyPreview = $data['bodyPreview'];
        }
        if (isset($data['cancelledOccurrences'])) {
            $this->cancelledOccurrences = $data['cancelledOccurrences'];
        }
        if (isset($data['end'])) {
            $this->end = $data['end'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['hideAttendees'])) {
            $this->hideAttendees = $data['hideAttendees'];
        }
        if (isset($data['iCalUId'])) {
            $this->iCalUId = $data['iCalUId'];
        }
        if (isset($data['importance'])) {
            $this->importance = $data['importance'];
        }
        if (isset($data['isAllDay'])) {
            $this->isAllDay = $data['isAllDay'];
        }
        if (isset($data['isCancelled'])) {
            $this->isCancelled = $data['isCancelled'];
        }
        if (isset($data['isDraft'])) {
            $this->isDraft = $data['isDraft'];
        }
        if (isset($data['isOnlineMeeting'])) {
            $this->isOnlineMeeting = $data['isOnlineMeeting'];
        }
        if (isset($data['isOrganizer'])) {
            $this->isOrganizer = $data['isOrganizer'];
        }
        if (isset($data['isReminderOn'])) {
            $this->isReminderOn = $data['isReminderOn'];
        }
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['locations'])) {
            $this->locations = $data['locations'];
        }
        if (isset($data['onlineMeeting'])) {
            $this->onlineMeeting = $data['onlineMeeting'];
        }
        if (isset($data['onlineMeetingProvider'])) {
            $this->onlineMeetingProvider = $data['onlineMeetingProvider'];
        }
        if (isset($data['onlineMeetingUrl'])) {
            $this->onlineMeetingUrl = $data['onlineMeetingUrl'];
        }
        if (isset($data['organizer'])) {
            $this->organizer = $data['organizer'];
        }
        if (isset($data['originalEndTimeZone'])) {
            $this->originalEndTimeZone = $data['originalEndTimeZone'];
        }
        if (isset($data['originalStart'])) {
            $this->originalStart = is_string($data['originalStart']) ? new \DateTimeImmutable($data['originalStart']) : $data['originalStart'];
        }
        if (isset($data['originalStartTimeZone'])) {
            $this->originalStartTimeZone = $data['originalStartTimeZone'];
        }
        if (isset($data['recurrence'])) {
            $this->recurrence = $data['recurrence'];
        }
        if (isset($data['reminderMinutesBeforeStart'])) {
            $this->reminderMinutesBeforeStart = $data['reminderMinutesBeforeStart'];
        }
        if (isset($data['responseRequested'])) {
            $this->responseRequested = $data['responseRequested'];
        }
        if (isset($data['responseStatus'])) {
            $this->responseStatus = $data['responseStatus'];
        }
        if (isset($data['sensitivity'])) {
            $this->sensitivity = $data['sensitivity'];
        }
        if (isset($data['seriesMasterId'])) {
            $this->seriesMasterId = $data['seriesMasterId'];
        }
        if (isset($data['showAs'])) {
            $this->showAs = $data['showAs'];
        }
        if (isset($data['start'])) {
            $this->start = $data['start'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['transactionId'])) {
            $this->transactionId = $data['transactionId'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['webLink'])) {
            $this->webLink = $data['webLink'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['calendar'])) {
            $this->calendar = $data['calendar'];
        }
        if (isset($data['exceptionOccurrences'])) {
            $this->exceptionOccurrences = $data['exceptionOccurrences'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['instances'])) {
            $this->instances = $data['instances'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
        }
    }
}
