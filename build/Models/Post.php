<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Post
 */
class Post
{
    /**
     * The contents of the post. This is a default property. This property can be null.
     */
    private ?string $body;

    /**
     * Unique ID of the conversation. Read-only.
     */
    private ?string $conversationId;

    /**
     * Unique ID of the conversation thread. Read-only.
     */
    private ?string $conversationThreadId;

    /**
     */
    private ?string $from;

    /**
     * Indicates whether the post has at least one attachment. This is a default property.
     */
    private ?bool $hasAttachments;

    /**
     * Conversation participants that were added to the thread as part of this post.
     */
    private array $newParticipants = [];

    /**
     * Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $receivedDateTime;

    /**
     * Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     */
    private ?string $sender;

    /**
     * Read-only. Nullable. Supports $expand.
     */
    private array $attachments = [];

    /**
     * The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     */
    private array $extensions = [];

    /**
     * Read-only. Supports $expand.
     */
    private ?string $inReplyTo;

    /**
     * The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     */
    private array $multiValueExtendedProperties = [];

    /**
     * The collection of single-value extended properties defined for the post. Read-only. Nullable.
     */
    private ?string $singleValueExtendedProperties;

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
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

    public function getConversationThreadId(): ?string
    {
        return $this->conversationThreadId;
    }

    public function setConversationThreadId(?string $conversationThreadId): self
    {
        $this->conversationThreadId = $conversationThreadId;
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

    public function getNewParticipants(): array
    {
        return $this->newParticipants;
    }

    public function setNewParticipants(array $newParticipants): self
    {
        $this->newParticipants = $newParticipants;
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

    public function getSender(): ?string
    {
        return $this->sender;
    }

    public function setSender(?string $sender): self
    {
        $this->sender = $sender;
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

    public function getInReplyTo(): ?string
    {
        return $this->inReplyTo;
    }

    public function setInReplyTo(?string $inReplyTo): self
    {
        $this->inReplyTo = $inReplyTo;
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

    public function getSingleValueExtendedProperties(): ?string
    {
        return $this->singleValueExtendedProperties;
    }

    public function setSingleValueExtendedProperties(?string $singleValueExtendedProperties): self
    {
        $this->singleValueExtendedProperties = $singleValueExtendedProperties;
        return $this;
    }

}
