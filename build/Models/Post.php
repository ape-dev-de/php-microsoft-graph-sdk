<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Post
 */
class Post
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
     * The contents of the post. This is a default property. This property can be null.
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** Unique ID of the conversation. Read-only. */
    public ?string $conversationId = null;

    /** Unique ID of the conversation thread. Read-only. */
    public ?string $conversationThreadId = null;

    /**  */
    public ?Recipient $from = null;

    /** Indicates whether the post has at least one attachment. This is a default property. */
    public ?bool $hasAttachments = null;

    /** 
     * Conversation participants that were added to the thread as part of this post.
     * @var Recipient[]
     */
    public array $newParticipants = [];

    /** Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    public ?\DateTimeInterface $receivedDateTime = null;

    /** 
     * Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     * @var Recipient|\stdClass|null
     */
    public mixed $sender = null;

    /** 
     * Read-only. Nullable. Supports $expand.
     * @var Attachment[]
     */
    public array $attachments = [];

    /** 
     * The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * Read-only. Supports $expand.
     * @var Post|\stdClass|null
     */
    public mixed $inReplyTo = null;

    /** 
     * The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     * @var MultiValueLegacyExtendedProperty[]
     */
    public array $multiValueExtendedProperties = [];

    /** 
     * The collection of single-value extended properties defined for the post. Read-only. Nullable.
     * @var SingleValueLegacyExtendedProperty[]
     */
    public array $singleValueExtendedProperties = [];


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
        if (isset($data['body'])) {
            $this->body = is_array($data['body']) ? new ItemBody($data['body']) : $data['body'];
        }
        if (isset($data['conversationId'])) {
            $this->conversationId = $data['conversationId'];
        }
        if (isset($data['conversationThreadId'])) {
            $this->conversationThreadId = $data['conversationThreadId'];
        }
        if (isset($data['from'])) {
            $this->from = is_array($data['from']) ? new Recipient($data['from']) : $data['from'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = $data['hasAttachments'];
        }
        if (isset($data['newParticipants'])) {
            $this->newParticipants = $data['newParticipants'];
        }
        if (isset($data['receivedDateTime'])) {
            $this->receivedDateTime = is_string($data['receivedDateTime']) ? new \DateTimeImmutable($data['receivedDateTime']) : $data['receivedDateTime'];
        }
        if (isset($data['sender'])) {
            $this->sender = is_array($data['sender']) ? new Recipient($data['sender']) : $data['sender'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['inReplyTo'])) {
            $this->inReplyTo = is_array($data['inReplyTo']) ? new Post($data['inReplyTo']) : $data['inReplyTo'];
        }
        if (isset($data['multiValueExtendedProperties'])) {
            $this->multiValueExtendedProperties = $data['multiValueExtendedProperties'];
        }
        if (isset($data['singleValueExtendedProperties'])) {
            $this->singleValueExtendedProperties = $data['singleValueExtendedProperties'];
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
