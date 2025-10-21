<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Post
 */
class Post
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
        /** The contents of the post. This is a default property. This property can be null. */
        public ?string $body = null,
        /** Unique ID of the conversation. Read-only. */
        public ?string $conversationId = null,
        /** Unique ID of the conversation thread. Read-only. */
        public ?string $conversationThreadId = null,
        /**  */
        public ?string $from = null,
        /** Indicates whether the post has at least one attachment. This is a default property. */
        public ?bool $hasAttachments = null,
        /** Conversation participants that were added to the thread as part of this post. */
        public array $newParticipants = [],
        /** Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $receivedDateTime = null,
        /** Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property. */
        public ?string $sender = null,
        /** Read-only. Nullable. Supports $expand. */
        public array $attachments = [],
        /** The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand. */
        public array $extensions = [],
        /** Read-only. Supports $expand. */
        public ?string $inReplyTo = null,
        /** The collection of multi-value extended properties defined for the post. Read-only. Nullable. */
        public array $multiValueExtendedProperties = [],
        /** @var string[] The collection of single-value extended properties defined for the post. Read-only. Nullable. */
        public array $singleValueExtendedProperties = []
    ) {}
}
