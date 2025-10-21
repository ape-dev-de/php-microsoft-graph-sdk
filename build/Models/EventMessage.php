<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EventMessage
 */
class EventMessage
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
        /** The Bcc: recipients for the message. */
        public array $bccRecipients = [],
        /** The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body. */
        public ?string $body = null,
        /** The first 255 characters of the message body. It is in text format. */
        public ?string $bodyPreview = null,
        /** The Cc: recipients for the message. */
        public array $ccRecipients = [],
        /** The ID of the conversation the email belongs to. */
        public ?string $conversationId = null,
        /** Indicates the position of the message within the conversation. */
        public ?string $conversationIndex = null,
        /** Indicates the status, start date, due date, or completion date for the message. */
        public ?string $flag = null,
        /** The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message. */
        public ?string $from = null,
        /** Indicates whether the message has attachments. This property doesn''t include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src=''cid:image001.jpg@01D26CD8.6C05F070''>. */
        public ?bool $hasAttachments = null,
        /** The importance of the message. The possible values are: low, normal, and high. */
        public ?string $importance = null,
        /** The classification of the message for the user, based on inferred relevance or importance, or on an explicit override. The possible values are: focused or other. */
        public ?string $inferenceClassification = null,
        /** A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only. */
        public array $internetMessageHeaders = [],
        /** The message ID in the format specified by RFC2822. */
        public ?string $internetMessageId = null,
        /** Indicates whether a read receipt is requested for the message. */
        public ?bool $isDeliveryReceiptRequested = null,
        /** Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet. */
        public ?bool $isDraft = null,
        /** Indicates whether the message has been read. */
        public ?bool $isRead = null,
        /** Indicates whether a read receipt is requested for the message. */
        public ?bool $isReadReceiptRequested = null,
        /** The unique identifier for the message's parent mailFolder. */
        public ?string $parentFolderId = null,
        /** The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $receivedDateTime = null,
        /** The email addresses to use when replying. */
        public array $replyTo = [],
        /** The account that is used to generate the message. In most cases, this value is the same as the from property. You can set this property to a different value when sending a message from a shared mailbox, for a shared calendar, or as a delegate. In any case, the value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message. */
        public ?string $sender = null,
        /** The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $sentDateTime = null,
        /** The subject of the message. */
        public ?string $subject = null,
        /** The To: recipients for the message. */
        public array $toRecipients = [],
        /** The part of the body of the message that is unique to the current message. uniqueBody is not returned by default but can be retrieved for a given message by use of the ?$select=uniqueBody query. It can be in HTML or text format. */
        public ?string $uniqueBody = null,
        /** The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, the browser shows the message in the Outlook on the web review pane.The message opens in the browser if you are signed in to your mailbox via Outlook on the web. You are prompted to sign in if you are not already signed in with the browser.This URL cannot be accessed from within an iFrame. */
        public ?string $webLink = null,
        /** The fileAttachment and itemAttachment attachments for the message. */
        public array $attachments = [],
        /** The collection of open extensions defined for the message. Nullable. */
        public array $extensions = [],
        /** The collection of multi-value extended properties defined for the message. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** @var string[] The collection of single-value extended properties defined for the message. Nullable. */
        public array $singleValueExtendedProperties = [],
        /**  */
        public ?string $endDateTime = null,
        /**  */
        public ?bool $isAllDay = null,
        /** True if this meeting request is accessible to a delegate, false otherwise. The default is false. */
        public ?bool $isDelegated = null,
        /**  */
        public ?bool $isOutOfDate = null,
        /**  */
        public ?string $location = null,
        /** The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined. */
        public ?string $meetingMessageType = null,
        /**  */
        public ?string $recurrence = null,
        /**  */
        public ?string $startDateTime = null,
        /**  */
        public ?string $type = null,
        /** The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only. */
        public ?string $event = null
    ) {}
}
