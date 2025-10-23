<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessage
 */
class ChatMessage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * References to attached objects like files, tabs, meetings etc.
     * @var ChatMessageAttachment[]
     */
    public array $attachments = [];

    /**  */
    public ?ItemBody $body = null;

    /** 
     * If the message was sent in a channel, represents identity of the channel.
     * @var ChannelIdentity|\stdClass|null
     */
    public mixed $channelIdentity = null;

    /** If the message was sent in a chat, represents the identity of the chat. */
    public ?string $chatId = null;

    /** Timestamp of when the chat message was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Read only. Timestamp at which the chat message was deleted, or null if not deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Read-only. Version number of the chat message. */
    public ?string $etag = null;

    /** 
     * Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     * @var EventMessageDetail|\stdClass|null
     */
    public mixed $eventDetail = null;

    /** 
     * Details of the sender of the chat message. Can only be set during migration.
     * @var ChatMessageFromIdentitySet|\stdClass|null
     */
    public mixed $from = null;

    /**  */
    public ?ChatMessageImportance $importance = null;

    /** Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null. */
    public ?\DateTimeInterface $lastEditedDateTime = null;

    /** Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Locale of the chat message set by the client. Always set to en-us. */
    public ?string $locale = null;

    /** 
     * List of entities mentioned in the chat message. Supported entities are: user, bot, team, channel, chat, and tag.
     * @var ChatMessageMention[]
     */
    public array $mentions = [];

    /** 
     * List of activity history of a message item, including modification time and actions, such as reactionAdded, reactionRemoved, or reaction changes, on the message.
     * @var ChatMessageHistoryItem[]
     */
    public array $messageHistory = [];

    /**  */
    public ?ChatMessageType $messageType = null;

    /** 
     * Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     * @var ChatMessagePolicyViolation|\stdClass|null
     */
    public mixed $policyViolation = null;

    /** 
     * Reactions for this chat message (for example, Like).
     * @var ChatMessageReaction[]
     */
    public array $reactions = [];

    /** Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.) */
    public ?string $replyToId = null;

    /** The subject of the chat message, in plaintext. */
    public ?string $subject = null;

    /** Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat. */
    public ?string $summary = null;

    /** Read-only. Link to the message in Microsoft Teams. */
    public ?string $webUrl = null;

    /** 
     * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     * @var ChatMessageHostedContent[]
     */
    public array $hostedContents = [];

    /** 
     * Replies for a specified message. Supports $expand for channel messages.
     * @var ChatMessage[]
     */
    public array $replies = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['attachments'])) {
            $this->attachments = $data['attachments'];
        }
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['channelIdentity'])) {
            $this->channelIdentity = $data['channelIdentity'];
        }
        if (isset($data['chatId'])) {
            $this->chatId = $data['chatId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['etag'])) {
            $this->etag = $data['etag'];
        }
        if (isset($data['eventDetail'])) {
            $this->eventDetail = $data['eventDetail'];
        }
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['importance'])) {
            $this->importance = $data['importance'];
        }
        if (isset($data['lastEditedDateTime'])) {
            $this->lastEditedDateTime = is_string($data['lastEditedDateTime']) ? new \DateTimeImmutable($data['lastEditedDateTime']) : $data['lastEditedDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['locale'])) {
            $this->locale = $data['locale'];
        }
        if (isset($data['mentions'])) {
            $this->mentions = $data['mentions'];
        }
        if (isset($data['messageHistory'])) {
            $this->messageHistory = $data['messageHistory'];
        }
        if (isset($data['messageType'])) {
            $this->messageType = $data['messageType'];
        }
        if (isset($data['policyViolation'])) {
            $this->policyViolation = $data['policyViolation'];
        }
        if (isset($data['reactions'])) {
            $this->reactions = $data['reactions'];
        }
        if (isset($data['replyToId'])) {
            $this->replyToId = $data['replyToId'];
        }
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['summary'])) {
            $this->summary = $data['summary'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['hostedContents'])) {
            $this->hostedContents = $data['hostedContents'];
        }
        if (isset($data['replies'])) {
            $this->replies = $data['replies'];
        }
    }
}
