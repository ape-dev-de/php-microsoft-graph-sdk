<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessage
 */
class ChatMessage
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** References to attached objects like files, tabs, meetings etc. */
        public array $attachments = [],
        /**  */
        public ?string $body = null,
        /** If the message was sent in a channel, represents identity of the channel. */
        public ?string $channelIdentity = null,
        /** If the message was sent in a chat, represents the identity of the chat. */
        public ?string $chatId = null,
        /** Timestamp of when the chat message was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Read only. Timestamp at which the chat message was deleted, or null if not deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Read-only. Version number of the chat message. */
        public ?string $etag = null,
        /** Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage. */
        public ?string $eventDetail = null,
        /** Details of the sender of the chat message. Can only be set during migration. */
        public ?string $from = null,
        /**  */
        public ?string $importance = null,
        /** Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null. */
        public ?\DateTimeInterface $lastEditedDateTime = null,
        /** Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Locale of the chat message set by the client. Always set to en-us. */
        public ?string $locale = null,
        /** List of entities mentioned in the chat message. Supported entities are: user, bot, team, channel, chat, and tag. */
        public array $mentions = [],
        /** List of activity history of a message item, including modification time and actions, such as reactionAdded, reactionRemoved, or reaction changes, on the message. */
        public array $messageHistory = [],
        /**  */
        public ?string $messageType = null,
        /** Defines the properties of a policy violation set by a data loss prevention (DLP) application. */
        public ?string $policyViolation = null,
        /** Reactions for this chat message (for example, Like). */
        public array $reactions = [],
        /** Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.) */
        public ?string $replyToId = null,
        /** The subject of the chat message, in plaintext. */
        public ?string $subject = null,
        /** Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat. */
        public ?string $summary = null,
        /** Read-only. Link to the message in Microsoft Teams. */
        public ?string $webUrl = null,
        /** Content in a message hosted by Microsoft Teams - for example, images or code snippets. */
        public array $hostedContents = [],
        /** @var string[] Replies for a specified message. Supports $expand for channel messages. */
        public array $replies = []
    ) {}
}
