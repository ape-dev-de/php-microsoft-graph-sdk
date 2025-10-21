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
     * @var string[]
     */
    private array $participants = [];


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

    /**
     * @return string[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @param string[] $participants
     */
    public function setParticipants(array $participants): self
    {
        $this->participants = $participants;
        return $this;
    }

}
