<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Message
 */
class Message
{
    /**
     * The Bcc: recipients for the message.
     */
    private array $bccRecipients = [];

    /**
     * The body of the message. It can be in HTML or text format. Find out about safe HTML in a message body.
     */
    private ?string $body;

    /**
     * The first 255 characters of the message body. It is in text format.
     */
    private ?string $bodyPreview;

    /**
     * The Cc: recipients for the message.
     */
    private array $ccRecipients = [];

    /**
     * The ID of the conversation the email belongs to.
     */
    private ?string $conversationId;

    /**
     * Indicates the position of the message within the conversation.
     */
    private ?string $conversationIndex;

    /**
     * Indicates the status, start date, due date, or completion date for the message.
     */
    private ?string $flag;

    /**
     * The owner of the mailbox from which the message is sent. In most cases, this value is the same as the sender property, except for sharing or delegation scenarios. The value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     */
    private ?string $from;

    /**
     * Indicates whether the message has attachments. This property doesn''t include inline attachments, so if a message contains only inline attachments, this property is false. To verify the existence of inline attachments, parse the body property to look for a src attribute, such as <IMG src=''cid:image001.jpg@01D26CD8.6C05F070''>.
     */
    private ?bool $hasAttachments;

    /**
     * The importance of the message. The possible values are: low, normal, and high.
     */
    private ?string $importance;

    /**
     * The classification of the message for the user, based on inferred relevance or importance, or on an explicit override. The possible values are: focused or other.
     */
    private ?string $inferenceClassification;

    /**
     * A collection of message headers defined by RFC5322. The set includes message headers indicating the network path taken by a message from the sender to the recipient. It can also contain custom message headers that hold app data for the message.  Returned only on applying a $select query option. Read-only.
     */
    private array $internetMessageHeaders = [];

    /**
     * The message ID in the format specified by RFC2822.
     */
    private ?string $internetMessageId;

    /**
     * Indicates whether a read receipt is requested for the message.
     */
    private ?bool $isDeliveryReceiptRequested;

    /**
     * Indicates whether the message is a draft. A message is a draft if it hasn't been sent yet.
     */
    private ?bool $isDraft;

    /**
     * Indicates whether the message has been read.
     */
    private ?bool $isRead;

    /**
     * Indicates whether a read receipt is requested for the message.
     */
    private ?bool $isReadReceiptRequested;

    /**
     * The unique identifier for the message's parent mailFolder.
     */
    private ?string $parentFolderId;

    /**
     * The date and time the message was received.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $receivedDateTime;

    /**
     * The email addresses to use when replying.
     */
    private array $replyTo = [];

    /**
     * The account that is used to generate the message. In most cases, this value is the same as the from property. You can set this property to a different value when sending a message from a shared mailbox, for a shared calendar, or as a delegate. In any case, the value must correspond to the actual mailbox used. Find out more about setting the from and sender properties of a message.
     */
    private ?string $sender;

    /**
     * The date and time the message was sent.  The date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $sentDateTime;

    /**
     * The subject of the message.
     */
    private ?string $subject;

    /**
     * The To: recipients for the message.
     */
    private array $toRecipients = [];

    /**
     * The part of the body of the message that is unique to the current message. uniqueBody is not returned by default but can be retrieved for a given message by use of the ?$select=uniqueBody query. It can be in HTML or text format.
     */
    private ?string $uniqueBody;

    /**
     * The URL to open the message in Outlook on the web.You can append an ispopout argument to the end of the URL to change how the message is displayed. If ispopout is not present or if it is set to 1, then the message is shown in a popout window. If ispopout is set to 0, the browser shows the message in the Outlook on the web review pane.The message opens in the browser if you are signed in to your mailbox via Outlook on the web. You are prompted to sign in if you are not already signed in with the browser.This URL cannot be accessed from within an iFrame.
     */
    private ?string $webLink;

    /**
     * The fileAttachment and itemAttachment attachments for the message.
     */
    private array $attachments = [];

    /**
     * The collection of open extensions defined for the message. Nullable.
     */
    private array $extensions = [];

    /**
     * The collection of multi-value extended properties defined for the message. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the message. Nullable.
     * @var string[]
     */
    private array $singleValueExtendedProperties = [];


    public function getBccRecipients(): array
    {
        return $this->bccRecipients;
    }

    public function setBccRecipients(array $bccRecipients): self
    {
        $this->bccRecipients = $bccRecipients;
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

    public function getCcRecipients(): array
    {
        return $this->ccRecipients;
    }

    public function setCcRecipients(array $ccRecipients): self
    {
        $this->ccRecipients = $ccRecipients;
        return $this;
    }

    public function getConversationId(): ?string
    {
        return $this->conversationId;
    }

    public function setConversationId(?string $conversationId): self
    {
        $this->conversationId = $conversationId;
        return $this;
    }

    public function getConversationIndex(): ?string
    {
        return $this->conversationIndex;
    }

    public function setConversationIndex(?string $conversationIndex): self
    {
        $this->conversationIndex = $conversationIndex;
        return $this;
    }

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(?string $flag): self
    {
        $this->flag = $flag;
        return $this;
    }

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(?string $from): self
    {
        $this->from = $from;
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

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getInferenceClassification(): ?string
    {
        return $this->inferenceClassification;
    }

    public function setInferenceClassification(?string $inferenceClassification): self
    {
        $this->inferenceClassification = $inferenceClassification;
        return $this;
    }

    public function getInternetMessageHeaders(): array
    {
        return $this->internetMessageHeaders;
    }

    public function setInternetMessageHeaders(array $internetMessageHeaders): self
    {
        $this->internetMessageHeaders = $internetMessageHeaders;
        return $this;
    }

    public function getInternetMessageId(): ?string
    {
        return $this->internetMessageId;
    }

    public function setInternetMessageId(?string $internetMessageId): self
    {
        $this->internetMessageId = $internetMessageId;
        return $this;
    }

    public function getIsDeliveryReceiptRequested(): ?bool
    {
        return $this->isDeliveryReceiptRequested;
    }

    public function setIsDeliveryReceiptRequested(?bool $isDeliveryReceiptRequested): self
    {
        $this->isDeliveryReceiptRequested = $isDeliveryReceiptRequested;
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

    public function getIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(?bool $isRead): self
    {
        $this->isRead = $isRead;
        return $this;
    }

    public function getIsReadReceiptRequested(): ?bool
    {
        return $this->isReadReceiptRequested;
    }

    public function setIsReadReceiptRequested(?bool $isReadReceiptRequested): self
    {
        $this->isReadReceiptRequested = $isReadReceiptRequested;
        return $this;
    }

    public function getParentFolderId(): ?string
    {
        return $this->parentFolderId;
    }

    public function setParentFolderId(?string $parentFolderId): self
    {
        $this->parentFolderId = $parentFolderId;
        return $this;
    }

    public function getReceivedDateTime(): ?\DateTimeInterface
    {
        return $this->receivedDateTime;
    }

    public function setReceivedDateTime(?\DateTimeInterface $receivedDateTime): self
    {
        $this->receivedDateTime = $receivedDateTime;
        return $this;
    }

    public function getReplyTo(): array
    {
        return $this->replyTo;
    }

    public function setReplyTo(array $replyTo): self
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function getSentDateTime(): ?\DateTimeInterface
    {
        return $this->sentDateTime;
    }

    public function setSentDateTime(?\DateTimeInterface $sentDateTime): self
    {
        $this->sentDateTime = $sentDateTime;
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

    public function getToRecipients(): array
    {
        return $this->toRecipients;
    }

    public function setToRecipients(array $toRecipients): self
    {
        $this->toRecipients = $toRecipients;
        return $this;
    }

    public function getUniqueBody(): ?string
    {
        return $this->uniqueBody;
    }

    public function setUniqueBody(?string $uniqueBody): self
    {
        $this->uniqueBody = $uniqueBody;
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

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
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
