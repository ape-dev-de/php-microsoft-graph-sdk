<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessage
 */
class ChatMessage
{
    /**
     * References to attached objects like files, tabs, meetings etc.
     */
    private array $attachments = [];

    /**
     */
    private ?string $body;

    /**
     * If the message was sent in a channel, represents identity of the channel.
     */
    private ?string $channelIdentity;

    /**
     * If the message was sent in a chat, represents the identity of the chat.
     */
    private ?string $chatId;

    /**
     * Timestamp of when the chat message was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     */
    private ?\DateTimeInterface $deletedDateTime;

    /**
     * Read-only. Version number of the chat message.
     */
    private ?string $etag;

    /**
     * Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     */
    private ?string $eventDetail;

    /**
     * Details of the sender of the chat message. Can only be set during migration.
     */
    private ?string $from;

    /**
     */
    private ?string $importance;

    /**
     * Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     */
    private ?\DateTimeInterface $lastEditedDateTime;

    /**
     * Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Locale of the chat message set by the client. Always set to en-us.
     */
    private ?string $locale;

    /**
     * List of entities mentioned in the chat message. Supported entities are: user, bot, team, channel, chat, and tag.
     */
    private array $mentions = [];

    /**
     * List of activity history of a message item, including modification time and actions, such as reactionAdded, reactionRemoved, or reaction changes, on the message.
     */
    private array $messageHistory = [];

    /**
     */
    private ?string $messageType;

    /**
     * Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     */
    private ?string $policyViolation;

    /**
     * Reactions for this chat message (for example, Like).
     */
    private array $reactions = [];

    /**
     * Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     */
    private ?string $replyToId;

    /**
     * The subject of the chat message, in plaintext.
     */
    private ?string $subject;

    /**
     * Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     */
    private ?string $summary;

    /**
     * Read-only. Link to the message in Microsoft Teams.
     */
    private ?string $webUrl;

    /**
     * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     */
    private array $hostedContents = [];

    /**
     * Replies for a specified message. Supports $expand for channel messages.
     */
    private ?string $replies;

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): self
    {
        $this->attachments = $attachments;
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

    public function getChannelIdentity(): ?string
    {
        return $this->channelIdentity;
    }

    public function setChannelIdentity(?string $channelIdentity): self
    {
        $this->channelIdentity = $channelIdentity;
        return $this;
    }

    public function getChatId(): ?string
    {
        return $this->chatId;
    }

    public function setChatId(?string $chatId): self
    {
        $this->chatId = $chatId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDeletedDateTime(): ?\DateTimeInterface
    {
        return $this->deletedDateTime;
    }

    public function setDeletedDateTime(?\DateTimeInterface $deletedDateTime): self
    {
        $this->deletedDateTime = $deletedDateTime;
        return $this;
    }

    public function getEtag(): ?string
    {
        return $this->etag;
    }

    public function setEtag(?string $etag): self
    {
        $this->etag = $etag;
        return $this;
    }

    public function getEventDetail(): ?string
    {
        return $this->eventDetail;
    }

    public function setEventDetail(?string $eventDetail): self
    {
        $this->eventDetail = $eventDetail;
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

    public function getImportance(): ?string
    {
        return $this->importance;
    }

    public function setImportance(?string $importance): self
    {
        $this->importance = $importance;
        return $this;
    }

    public function getLastEditedDateTime(): ?\DateTimeInterface
    {
        return $this->lastEditedDateTime;
    }

    public function setLastEditedDateTime(?\DateTimeInterface $lastEditedDateTime): self
    {
        $this->lastEditedDateTime = $lastEditedDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getMentions(): array
    {
        return $this->mentions;
    }

    public function setMentions(array $mentions): self
    {
        $this->mentions = $mentions;
        return $this;
    }

    public function getMessageHistory(): array
    {
        return $this->messageHistory;
    }

    public function setMessageHistory(array $messageHistory): self
    {
        $this->messageHistory = $messageHistory;
        return $this;
    }

    public function getMessageType(): ?string
    {
        return $this->messageType;
    }

    public function setMessageType(?string $messageType): self
    {
        $this->messageType = $messageType;
        return $this;
    }

    public function getPolicyViolation(): ?string
    {
        return $this->policyViolation;
    }

    public function setPolicyViolation(?string $policyViolation): self
    {
        $this->policyViolation = $policyViolation;
        return $this;
    }

    public function getReactions(): array
    {
        return $this->reactions;
    }

    public function setReactions(array $reactions): self
    {
        $this->reactions = $reactions;
        return $this;
    }

    public function getReplyToId(): ?string
    {
        return $this->replyToId;
    }

    public function setReplyToId(?string $replyToId): self
    {
        $this->replyToId = $replyToId;
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

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getHostedContents(): array
    {
        return $this->hostedContents;
    }

    public function setHostedContents(array $hostedContents): self
    {
        $this->hostedContents = $hostedContents;
        return $this;
    }

    public function getReplies(): ?string
    {
        return $this->replies;
    }

    public function setReplies(?string $replies): self
    {
        $this->replies = $replies;
        return $this;
    }

}
