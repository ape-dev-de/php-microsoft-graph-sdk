<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageInfo
 */
class ChatMessageInfo
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object doesn't return @mentions and attachments. */
        public ?string $body = null,
        /** Date time object representing the time at which message was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property is set to systemEventMessage. */
        public ?string $eventDetail = null,
        /** Information about the sender of the message. */
        public ?string $from = null,
        /** If set to true, the original message has been deleted. */
        public ?bool $isDeleted = null,
        /**  */
        public ?string $messageType = null
    ) {}
}
