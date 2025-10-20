<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessagePinnedEventMessageDetail
 */
class MessagePinnedEventMessageDetail
{
    /**
     * Date and time when the event occurred.
     */
    private ?\DateTimeInterface $eventDateTime;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

}
