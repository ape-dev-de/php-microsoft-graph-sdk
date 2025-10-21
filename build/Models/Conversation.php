<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Conversation
 */
class Conversation
{
    /**
     * Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
     */
    private ?bool $hasAttachments;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     */
    private ?\DateTimeInterface $lastDeliveredDateTime;

    /**
     * A short summary from the body of the latest post in this conversation. Supports $filter (eq, ne, le, ge).
     */
    private ?string $preview;

    /**
     * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
     */
    private ?string $topic;

    /**
     * All the users that sent a message to this Conversation.
     * @var string[]
     */
    private array $uniqueSenders = [];

    /**
     * A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     * @var string[]
     */
    private array $threads = [];


    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    public function setHasAttachments(?bool $hasAttachments): self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    public function getLastDeliveredDateTime(): ?\DateTimeInterface
    {
        return $this->lastDeliveredDateTime;
    }

    public function setLastDeliveredDateTime(?\DateTimeInterface $lastDeliveredDateTime): self
    {
        $this->lastDeliveredDateTime = $lastDeliveredDateTime;
        return $this;
    }

    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): self
    {
        $this->preview = $preview;
        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(?string $topic): self
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUniqueSenders(): array
    {
        return $this->uniqueSenders;
    }

    /**
     * @param string[] $uniqueSenders
     */
    public function setUniqueSenders(array $uniqueSenders): self
    {
        $this->uniqueSenders = $uniqueSenders;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getThreads(): array
    {
        return $this->threads;
    }

    /**
     * @param string[] $threads
     */
    public function setThreads(array $threads): self
    {
        $this->threads = $threads;
        return $this;
    }

}
