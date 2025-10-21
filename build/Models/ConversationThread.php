<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConversationThread
 */
class ConversationThread
{
    /**
     * The Cc: recipients for the thread. Returned only on $select.
     */
    private array $ccRecipients = [];

    /**
     * Indicates whether any of the posts within this thread has at least one attachment. Returned by default.
     */
    private ?bool $hasAttachments;

    /**
     * Indicates if the thread is locked. Returned by default.
     */
    private ?bool $isLocked;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.Returned by default.
     */
    private ?\DateTimeInterface $lastDeliveredDateTime;

    /**
     * A short summary from the body of the latest post in this conversation. Returned by default.
     */
    private ?string $preview;

    /**
     * The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated. Returned by default.
     */
    private ?string $topic;

    /**
     * The To: recipients for the thread. Returned only on $select.
     */
    private array $toRecipients = [];

    /**
     * All the users that sent a message to this thread. Returned by default.
     * @var string[]
     */
    private array $uniqueSenders = [];

    /**
     * @var string[]
     */
    private array $posts = [];


    public function getCcRecipients(): array
    {
        return $this->ccRecipients;
    }

    public function setCcRecipients(array $ccRecipients): self
    {
        $this->ccRecipients = $ccRecipients;
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

    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }

    public function setIsLocked(?bool $isLocked): self
    {
        $this->isLocked = $isLocked;
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

    public function getToRecipients(): array
    {
        return $this->toRecipients;
    }

    public function setToRecipients(array $toRecipients): self
    {
        $this->toRecipients = $toRecipients;
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
    public function getPosts(): array
    {
        return $this->posts;
    }

    /**
     * @param string[] $posts
     */
    public function setPosts(array $posts): self
    {
        $this->posts = $posts;
        return $this;
    }

}
