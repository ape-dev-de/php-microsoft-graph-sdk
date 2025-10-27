<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessageRequest
 */
class EventMessageRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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

    /** 
     * The Bcc: recipients for the message.
     * @var Recipient[]
     */
    public array $bccRecipients = [];

    /** 
     * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** The first 255 characters of the message body. It is in text format. */
    public ?string $bodyPreview = null;

    /** 
     * The Cc: recipients for the message.
     * @var Recipient[]
     */
    public array $ccRecipients = [];

    /** The ID of the conversation the email belongs to. */
    public ?string $conversationId = null;

    /** Indicates the position of the message within the conversation. */
    public ?string $conversationIndex = null;

    /** 
     * Indicates the status, start date, due date, or completion date for the message.
     * @var FollowupFlag|\stdClass|null
     */
    public mixed $flag = null;

    /** 
     * The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     * @var Recipient|\stdClass|null
     */
    public mixed $from = null;

    /** Indicates whether the message has attachments. This property doesn't include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src='cid:image001.jpg@01D26CD8.6C05F070'>. */
    public ?bool $hasAttachments = null;

    /** 
     * The importance of the message. The possible values are: low, normal, and high.
     * @var Importance|\stdClass|null
     */
    public mixed $importance = null;

    /** 
     * The classification of the message for the user, based on inferred relevance or importance, or on an explicit override. The possible values are: focused or other.
     * @var InferenceClassificationType|\stdClass|null
     */
    public mixed $inferenceClassification = null;

    /** 
     * A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only.
     * @var InternetMessageHeader[]
     */
    public array $internetMessageHeaders = [];

    /** The message ID in the format specified by RFC2822. */
    public ?string $internetMessageId = null;

    /** Indicates whether a read receipt is requested for the message. */
    public ?bool $isDeliveryReceiptRequested = null;

    /** Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet. */
    public ?bool $isDraft = null;

    /** Indicates whether the message has been read. */
    public ?bool $isRead = null;

    /** Indicates whether a read receipt is requested for the message. */
    public ?bool $isReadReceiptRequested = null;

    /** The unique identifier for the message's parent mailFolder. */
    public ?string $parentFolderId = null;

    /** The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $receivedDateTime = null;

    /** 
     * The email addresses to use when replying.
     * @var Recipient[]
     */
    public array $replyTo = [];

    /** 
     * The account that is used to generate the message. In most cases, this value is the same as the from property. You can set this property to a different value when sending a message from a shared mailbox, for a shared calendar, or as a delegate. In any case, the value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     * @var Recipient|\stdClass|null
     */
    public mixed $sender = null;

    /** The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $sentDateTime = null;

    /** The subject of the message. */
    public ?string $subject = null;

    /** 
     * The To: recipients for the message.
     * @var Recipient[]
     */
    public array $toRecipients = [];

    /** 
     * The part of the body of the message that is unique to the current message. uniqueBody is not returned by default but can be retrieved for a given message by use of the ?$select=uniqueBody query. It can be in HTML or text format.
     * @var ItemBody|\stdClass|null
     */
    public mixed $uniqueBody = null;

    /** The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, the browser shows the message in the Outlook on the web review pane.The message opens in the browser if you are signed in to your mailbox via Outlook on the web. You are prompted to sign in if you are not already signed in with the browser.This URL cannot be accessed from within an iFrame. */
    public ?string $webLink = null;

    /** 
     * The fileAttachment and itemAttachment attachments for the message.
     * @var Attachment[]
     */
    public array $attachments = [];

    /** 
     * The collection of open extensions defined for the message. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * The collection of multi-value extended properties defined for the message. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * The collection of single-value extended properties defined for the message. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];

    /** 
     * 
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $endDateTime = null;

    /**  */
    public ?bool $isAllDay = null;

    /** True if this meeting request is accessible to a delegate, false otherwise. The default is false. */
    public ?bool $isDelegated = null;

    /**  */
    public ?bool $isOutOfDate = null;

    /** 
     * 
     * @var Location|\stdClass|null
     */
    public mixed $location = null;

    /** 
     * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
     * @var MeetingMessageType|\stdClass|null
     */
    public mixed $meetingMessageType = null;

    /** 
     * 
     * @var PatternedRecurrence|\stdClass|null
     */
    public mixed $recurrence = null;

    /** 
     * 
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $startDateTime = null;

    /** 
     * 
     * @var EventType|\stdClass|null
     */
    public mixed $type = null;

    /** 
     * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only.
     * @var Event|\stdClass|null
     */
    public mixed $event = null;

    /** True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true. */
    public ?bool $allowNewTimeProposals = null;

    /** 
     * 
     * @var MeetingRequestType|\stdClass|null
     */
    public mixed $meetingRequestType = null;

    /** 
     * If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $previousEndDateTime = null;

    /** 
     * If the meeting update changes the meeting location, this property specifies the previous meeting location.
     * @var Location|\stdClass|null
     */
    public mixed $previousLocation = null;

    /** 
     * If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $previousStartDateTime = null;

    /** Set to true if the sender would like the invitee to send a response to the requested meeting. */
    public ?bool $responseRequested = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
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
        if (isset($data['bccRecipients'])) {
            $this->bccRecipients = $data['bccRecipients'];
        }
        if (isset($data['body'])) {
            $this->body = is_array($data['body']) ? new ItemBody($data['body']) : $data['body'];
        }
        if (isset($data['bodyPreview'])) {
            $this->bodyPreview = $data['bodyPreview'];
        }
        if (isset($data['ccRecipients'])) {
            $this->ccRecipients = $data['ccRecipients'];
        }
        if (isset($data['conversationId'])) {
            $this->conversationId = $data['conversationId'];
        }
        if (isset($data['conversationIndex'])) {
            $this->conversationIndex = $data['conversationIndex'];
        }
        if (isset($data['flag'])) {
            $this->flag = is_array($data['flag']) ? new FollowupFlag($data['flag']) : $data['flag'];
        }
        if (isset($data['from'])) {
            $this->from = is_array($data['from']) ? new Recipient($data['from']) : $data['from'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['importance'])) {
            $this->importance = is_array($data['importance']) ? new Importance($data['importance']) : $data['importance'];
        }
        if (isset($data['inferenceClassification'])) {
            $this->inferenceClassification = is_array($data['inferenceClassification']) ? new InferenceClassificationType($data['inferenceClassification']) : $data['inferenceClassification'];
        }
        if (isset($data['internetMessageHeaders'])) {
            $this->internetMessageHeaders = $data['internetMessageHeaders'];
        }
        if (isset($data['internetMessageId'])) {
            $this->internetMessageId = $data['internetMessageId'];
        }
        if (isset($data['isDeliveryReceiptRequested'])) {
            $this->isDeliveryReceiptRequested = $data['isDeliveryReceiptRequested'];
        }
        if (isset($data['isDraft'])) {
            $this->isDraft = $data['isDraft'];
        }
        if (isset($data['isRead'])) {
            $this->isRead = $data['isRead'];
        }
        if (isset($data['isReadReceiptRequested'])) {
            $this->isReadReceiptRequested = $data['isReadReceiptRequested'];
        }
        if (isset($data['parentFolderId'])) {
            $this->parentFolderId = $data['parentFolderId'];
        }
        if (isset($data['receivedDateTime'])) {
            $this->receivedDateTime = is_string($data['receivedDateTime']) ? new \DateTimeImmutable($data['receivedDateTime']) : $data['receivedDateTime'];
        }
        if (isset($data['replyTo'])) {
            $this->replyTo = $data['replyTo'];
        }
        if (isset($data['sender'])) {
            $this->sender = is_array($data['sender']) ? new Recipient($data['sender']) : $data['sender'];
        }
        if (isset($data['sentDateTime'])) {
            $this->sentDateTime = is_string($data['sentDateTime']) ? new \DateTimeImmutable($data['sentDateTime']) : $data['sentDateTime'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['toRecipients'])) {
            $this->toRecipients = $data['toRecipients'];
        }
        if (isset($data['uniqueBody'])) {
            $this->uniqueBody = is_array($data['uniqueBody']) ? new ItemBody($data['uniqueBody']) : $data['uniqueBody'];
        }
        if (isset($data['webLink'])) {
            $this->webLink = $data['webLink'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_array($data['endDateTime']) ? new DateTimeTimeZone($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['isAllDay'])) {
            $this->isAllDay = $data['isAllDay'];
        }
        if (isset($data['isDelegated'])) {
            $this->isDelegated = $data['isDelegated'];
        }
        if (isset($data['isOutOfDate'])) {
            $this->isOutOfDate = $data['isOutOfDate'];
        }
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new Location($data['location']) : $data['location'];
        }
        if (isset($data['meetingMessageType'])) {
            $this->meetingMessageType = is_array($data['meetingMessageType']) ? new MeetingMessageType($data['meetingMessageType']) : $data['meetingMessageType'];
        }
        if (isset($data['recurrence'])) {
            $this->recurrence = is_array($data['recurrence']) ? new PatternedRecurrence($data['recurrence']) : $data['recurrence'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_array($data['startDateTime']) ? new DateTimeTimeZone($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new EventType($data['type']) : $data['type'];
        }
        if (isset($data['event'])) {
            $this->event = is_array($data['event']) ? new Event($data['event']) : $data['event'];
        }
        if (isset($data['allowNewTimeProposals'])) {
            $this->allowNewTimeProposals = $data['allowNewTimeProposals'];
        }
        if (isset($data['meetingRequestType'])) {
            $this->meetingRequestType = is_array($data['meetingRequestType']) ? new MeetingRequestType($data['meetingRequestType']) : $data['meetingRequestType'];
        }
        if (isset($data['previousEndDateTime'])) {
            $this->previousEndDateTime = is_array($data['previousEndDateTime']) ? new DateTimeTimeZone($data['previousEndDateTime']) : $data['previousEndDateTime'];
        }
        if (isset($data['previousLocation'])) {
            $this->previousLocation = is_array($data['previousLocation']) ? new Location($data['previousLocation']) : $data['previousLocation'];
        }
        if (isset($data['previousStartDateTime'])) {
            $this->previousStartDateTime = is_array($data['previousStartDateTime']) ? new DateTimeTimeZone($data['previousStartDateTime']) : $data['previousStartDateTime'];
        }
        if (isset($data['responseRequested'])) {
            $this->responseRequested = $data['responseRequested'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
