<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Event
 */
class Event
{
    /**
     * true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. The default is true.
     */
    private ?bool $allowNewTimeProposals;

    /**
     * The collection of attendees for the event.
     */
    private array $attendees = [];

    /**
     * The body of the message associated with the event. It can be in HTML or text format.
     */
    private ?string $body;

    /**
     * The preview of the message associated with the event. It's in text format.
     */
    private ?string $bodyPreview;

    /**
     * Contains occurrenceId property values of canceled instances in a recurring series, if the event is the series master. Instances in a recurring series that are canceled are called canceled occurences.Returned only on $select in a Get operation which specifies the ID (seriesMasterId property value) of a series master event.
     * @var string[]
     */
    private array $cancelledOccurrences = [];

    /**
     * The date, time, and time zone that the event ends. By default, the end time is in UTC.
     */
    private ?string $end;

    /**
     * Set to true if the event has attachments.
     */
    private ?bool $hasAttachments;

    /**
     * When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. The default is false.
     */
    private ?bool $hideAttendees;

    /**
     * A unique identifier for an event across calendars. This ID is different for each occurrence in a recurring series. Read-only.
     */
    private ?string $iCalUId;

    /**
     * The importance of the event. The possible values are: low, normal, high.
     */
    private ?string $importance;

    /**
     * Set to true if the event lasts all day. If true, regardless of whether it''s a single-day or multi-day event, start, and endtime must be set to midnight and be in the same time zone.
     */
    private ?bool $isAllDay;

    /**
     * Set to true if the event has been canceled.
     */
    private ?bool $isCancelled;

    /**
     * Set to true if the user has updated the meeting in Outlook but hasn''t sent the updates to attendees. Set to false if all changes are sent, or if the event is an appointment without any attendees.
     */
    private ?bool $isDraft;

    /**
     * True if this event has online meeting information (that is, onlineMeeting points to an onlineMeetingInfo resource), false otherwise. Default is false (onlineMeeting is null). Optional.  After you set isOnlineMeeting to true, Microsoft Graph initializes onlineMeeting. Subsequently, Outlook ignores any further changes to isOnlineMeeting, and the meeting remains available online.
     */
    private ?bool $isOnlineMeeting;

    /**
     * Set to true if the calendar owner (specified by the owner property of the calendar) is the organizer of the event (specified by the organizer property of the event). It also applies if a delegate organized the event on behalf of the owner.
     */
    private ?bool $isOrganizer;

    /**
     * Set to true if an alert is set to remind the user of the event.
     */
    private ?bool $isReminderOn;

    /**
     * The location of the event.
     */
    private ?string $location;

    /**
     * The locations where the event is held or attended from. The location and locations properties always correspond with each other. If you update the location property, any prior locations in the locations collection are removed and replaced by the new location value.
     */
    private array $locations = [];

    /**
     * Details for an attendee to join the meeting online. The default is null. Read-only. After you set the isOnlineMeeting and onlineMeetingProvider properties to enable a meeting online, Microsoft Graph initializes onlineMeeting. When set, the meeting remains available online, and you can''t change the isOnlineMeeting, onlineMeetingProvider, and onlneMeeting properties again.
     */
    private ?string $onlineMeeting;

    /**
     * Represents the online meeting service provider. By default, onlineMeetingProvider is unknown. The possible values are unknown, teamsForBusiness, skypeForBusiness, and skypeForConsumer. Optional.  After you set onlineMeetingProvider, Microsoft Graph initializes onlineMeeting. Subsequently, you can''t change onlineMeetingProvider again, and the meeting remains available online.
     */
    private ?string $onlineMeetingProvider;

    /**
     * A URL for an online meeting. The property is set only when an organizer specifies in Outlook that an event is an online meeting such as Skype. Read-only.To access the URL to join an online meeting, use joinUrl which is exposed via the onlineMeeting property of the event. The onlineMeetingUrl property will be deprecated in the future.
     */
    private ?string $onlineMeetingUrl;

    /**
     * The organizer of the event.
     */
    private ?string $organizer;

    /**
     * The end time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
     */
    private ?string $originalEndTimeZone;

    /**
     * Represents the start time of an event when it''s initially created as an occurrence or exception in a recurring series. This property is not returned for events that are single instances. Its date and time information is expressed in ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $originalStart;

    /**
     * The start time zone that was set when the event was created. A value of tzone://Microsoft/Custom indicates that a legacy custom time zone was set in desktop Outlook.
     */
    private ?string $originalStartTimeZone;

    /**
     * The recurrence pattern for the event.
     */
    private ?string $recurrence;

    /**
     * The number of minutes before the event start time that the reminder alert occurs.
     */
    private ?float $reminderMinutesBeforeStart;

    /**
     * Default is true, which represents the organizer would like an invitee to send a response to the event.
     */
    private ?bool $responseRequested;

    /**
     * Indicates the type of response sent in response to an event message.
     */
    private ?string $responseStatus;

    /**
     * Possible values are: normal, personal, private, and confidential.
     */
    private ?string $sensitivity;

    /**
     * The ID for the recurring series master item, if this event is part of a recurring series.
     */
    private ?string $seriesMasterId;

    /**
     * The status to show. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     */
    private ?string $showAs;

    /**
     * The start date, time, and time zone of the event. By default, the start time is in UTC.
     */
    private ?string $start;

    /**
     * The text of the event's subject line.
     */
    private ?string $subject;

    /**
     * A custom identifier specified by a client app for the server to avoid redundant POST operations in case of client retries to create the same event. It''s useful when low network connectivity causes the client to time out before receiving a response from the server for the client''s prior create-event request. After you set transactionId when creating an event, you can''t change transactionId in a subsequent update. This property is only returned in a response payload if an app has set it. Optional.
     */
    private ?string $transactionId;

    /**
     * The event type. Possible values are: singleInstance, occurrence, exception, seriesMaster. Read-only
     */
    private ?string $type;

    /**
     * The URL to open the event in Outlook on the web.Outlook on the web opens the event in the browser if you are signed in to your mailbox. Otherwise, Outlook on the web prompts you to sign in.This URL can''t be accessed from within an iFrame.
     */
    private ?string $webLink;

    /**
     * The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     */
    private array $attachments = [];

    /**
     * The calendar that contains the event. Navigation property. Read-only.
     */
    private ?string $calendar;

    /**
     * Contains the id property values of the event instances that are exceptions in a recurring series.Exceptions can differ from other occurrences in a recurring series, such as the subject, start or end times, or attendees. Exceptions don''t include canceled occurrences.Returned only on $select and $expand in a GET operation that specifies the ID (seriesMasterId property value) of a series master event.
     */
    private array $exceptionOccurrences = [];

    /**
     * The collection of open extensions defined for the event. Nullable.
     */
    private array $extensions = [];

    /**
     * The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions modified, but doesn''t include occurrences canceled from the series. Navigation property. Read-only. Nullable.
     */
    private array $instances = [];

    /**
     * The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @var string[]
     */
    private array $singleValueExtendedProperties = [];


    public function getAllowNewTimeProposals(): ?bool
    {
        return $this->allowNewTimeProposals;
    }

    public function setAllowNewTimeProposals(?bool $allowNewTimeProposals): self
    {
        $this->allowNewTimeProposals = $allowNewTimeProposals;
        return $this;
    }

    public function getAttendees(): array
    {
        return $this->attendees;
    }

    public function setAttendees(array $attendees): self
    {
        $this->attendees = $attendees;
        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
        return $this;
    }

    public function getBodyPreview(): ?string
    {
        return $this->bodyPreview;
    }

    public function setBodyPreview(?string $bodyPreview): self
    {
        $this->bodyPreview = $bodyPreview;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCancelledOccurrences(): array
    {
        return $this->cancelledOccurrences;
    }

    /**
     * @param string[] $cancelledOccurrences
     */
    public function setCancelledOccurrences(array $cancelledOccurrences): self
    {
        $this->cancelledOccurrences = $cancelledOccurrences;
        return $this;
    }

    public function getEnd(): ?string
    {
        return $this->end;
    }

    public function setEnd(?string $end): self
    {
        $this->end = $end;
        return $this;
    }

    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    public function setHasAttachments(?bool $hasAttachments): self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    public function getHideAttendees(): ?bool
    {
        return $this->hideAttendees;
    }

    public function setHideAttendees(?bool $hideAttendees): self
    {
        $this->hideAttendees = $hideAttendees;
        return $this;
    }

    public function getICalUId(): ?string
    {
        return $this->iCalUId;
    }

    public function setICalUId(?string $iCalUId): self
    {
        $this->iCalUId = $iCalUId;
        return $this;
    }

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getIsAllDay(): ?bool
    {
        return $this->isAllDay;
    }

    public function setIsAllDay(?bool $isAllDay): self
    {
        $this->isAllDay = $isAllDay;
        return $this;
    }

    public function getIsCancelled(): ?bool
    {
        return $this->isCancelled;
    }

    public function setIsCancelled(?bool $isCancelled): self
    {
        $this->isCancelled = $isCancelled;
        return $this;
    }

    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }

    public function setIsDraft(?bool $isDraft): self
    {
        $this->isDraft = $isDraft;
        return $this;
    }

    public function getIsOnlineMeeting(): ?bool
    {
        return $this->isOnlineMeeting;
    }

    public function setIsOnlineMeeting(?bool $isOnlineMeeting): self
    {
        $this->isOnlineMeeting = $isOnlineMeeting;
        return $this;
    }

    public function getIsOrganizer(): ?bool
    {
        return $this->isOrganizer;
    }

    public function setIsOrganizer(?bool $isOrganizer): self
    {
        $this->isOrganizer = $isOrganizer;
        return $this;
    }

    public function getIsReminderOn(): ?bool
    {
        return $this->isReminderOn;
    }

    public function setIsReminderOn(?bool $isReminderOn): self
    {
        $this->isReminderOn = $isReminderOn;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getLocations(): array
    {
        return $this->locations;
    }

    public function setLocations(array $locations): self
    {
        $this->locations = $locations;
        return $this;
    }

    public function getOnlineMeeting(): ?string
    {
        return $this->onlineMeeting;
    }

    public function setOnlineMeeting(?string $onlineMeeting): self
    {
        $this->onlineMeeting = $onlineMeeting;
        return $this;
    }

    public function getOnlineMeetingProvider(): ?string
    {
        return $this->onlineMeetingProvider;
    }

    public function setOnlineMeetingProvider(?string $onlineMeetingProvider): self
    {
        $this->onlineMeetingProvider = $onlineMeetingProvider;
        return $this;
    }

    public function getOnlineMeetingUrl(): ?string
    {
        return $this->onlineMeetingUrl;
    }

    public function setOnlineMeetingUrl(?string $onlineMeetingUrl): self
    {
        $this->onlineMeetingUrl = $onlineMeetingUrl;
        return $this;
    }

    public function getOrganizer(): ?string
    {
        return $this->organizer;
    }

    public function setOrganizer(?string $organizer): self
    {
        $this->organizer = $organizer;
        return $this;
    }

    public function getOriginalEndTimeZone(): ?string
    {
        return $this->originalEndTimeZone;
    }

    public function setOriginalEndTimeZone(?string $originalEndTimeZone): self
    {
        $this->originalEndTimeZone = $originalEndTimeZone;
        return $this;
    }

    public function getOriginalStart(): ?\DateTimeInterface
    {
        return $this->originalStart;
    }

    public function setOriginalStart(?\DateTimeInterface $originalStart): self
    {
        $this->originalStart = $originalStart;
        return $this;
    }

    public function getOriginalStartTimeZone(): ?string
    {
        return $this->originalStartTimeZone;
    }

    public function setOriginalStartTimeZone(?string $originalStartTimeZone): self
    {
        $this->originalStartTimeZone = $originalStartTimeZone;
        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getReminderMinutesBeforeStart(): ?float
    {
        return $this->reminderMinutesBeforeStart;
    }

    public function setReminderMinutesBeforeStart(?float $reminderMinutesBeforeStart): self
    {
        $this->reminderMinutesBeforeStart = $reminderMinutesBeforeStart;
        return $this;
    }

    public function getResponseRequested(): ?bool
    {
        return $this->responseRequested;
    }

    public function setResponseRequested(?bool $responseRequested): self
    {
        $this->responseRequested = $responseRequested;
        return $this;
    }

    public function getResponseStatus(): ?string
    {
        return $this->responseStatus;
    }

    public function setResponseStatus(?string $responseStatus): self
    {
        $this->responseStatus = $responseStatus;
        return $this;
    }

    public function getSensitivity(): ?string
    {
        return $this->sensitivity;
    }

    public function setSensitivity(?string $sensitivity): self
    {
        $this->sensitivity = $sensitivity;
        return $this;
    }

    public function getSeriesMasterId(): ?string
    {
        return $this->seriesMasterId;
    }

    public function setSeriesMasterId(?string $seriesMasterId): self
    {
        $this->seriesMasterId = $seriesMasterId;
        return $this;
    }

    public function getShowAs(): ?string
    {
        return $this->showAs;
    }

    public function setShowAs(?string $showAs): self
    {
        $this->showAs = $showAs;
        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(?string $start): self
    {
        $this->start = $start;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): self
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getWebLink(): ?string
    {
        return $this->webLink;
    }

    public function setWebLink(?string $webLink): self
    {
        $this->webLink = $webLink;
        return $this;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getCalendar(): ?string
    {
        return $this->calendar;
    }

    public function setCalendar(?string $calendar): self
    {
        $this->calendar = $calendar;
        return $this;
    }

    public function getExceptionOccurrences(): array
    {
        return $this->exceptionOccurrences;
    }

    public function setExceptionOccurrences(array $exceptionOccurrences): self
    {
        $this->exceptionOccurrences = $exceptionOccurrences;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getInstances(): array
    {
        return $this->instances;
    }

    public function setInstances(array $instances): self
    {
        $this->instances = $instances;
        return $this;
    }

    public function getMultiValueExtendedProperties(): array
    {
        return $this->multiValueExtendedProperties;
    }

    public function setMultiValueExtendedProperties(array $multiValueExtendedProperties): self
    {
        $this->multiValueExtendedProperties = $multiValueExtendedProperties;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSingleValueExtendedProperties(): array
    {
        return $this->singleValueExtendedProperties;
    }

    /**
     * @param string[] $singleValueExtendedProperties
     */
    public function setSingleValueExtendedProperties(array $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
