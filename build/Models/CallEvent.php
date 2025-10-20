<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEvent
 */
class CallEvent
{
    /**
     */
    private ?string $callEventType;

    /**
     */
    private ?\DateTimeInterface $eventDateTime;

    /**
     */
    private ?string $participants;

    public function getCallEventType(): ?string
    {
        return $this->callEventType;
    }

    public function setCallEventType(?string $callEventType): self
    {
        $this->callEventType = $callEventType;
        return $this;
    }

    public function getEventDateTime(): ?\DateTimeInterface
    {
        return $this->eventDateTime;
    }

    public function setEventDateTime(?\DateTimeInterface $eventDateTime): self
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    public function getParticipants(): ?string
    {
        return $this->participants;
    }

    public function setParticipants(?string $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

}
