<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageInfo
 */
class ChatMessageInfo
{
    /**
     * Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object doesn't return @mentions and attachments.
     */
    private ?string $body;

    /**
     * Date time object representing the time at which message was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property is set to systemEventMessage.
     */
    private ?string $eventDetail;

    /**
     * Information about the sender of the message.
     */
    private ?string $from;

    /**
     * If set to true, the original message has been deleted.
     */
    private ?bool $isDeleted;

    /**
     */
    private ?string $messageType;

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;
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

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;
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

}
