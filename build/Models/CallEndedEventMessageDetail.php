<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallEndedEventMessageDetail
 */
class CallEndedEventMessageDetail
{
    /**
     * Duration of the call.
     */
    private ?string $callDuration;

    /**
     * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     */
    private ?string $callEventType;

    /**
     * Unique identifier of the call.
     */
    private ?string $callId;

    /**
     * List of call participants.
     */
    private array $callParticipants = [];

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    public function getCallDuration(): ?string
    {
        return $this->callDuration;
    }

    public function setCallDuration(?string $callDuration): self
    {
        $this->callDuration = $callDuration;
        return $this;
    }

    public function getCallEventType(): ?string
    {
        return $this->callEventType;
    }

    public function setCallEventType(?string $callEventType): self
    {
        $this->callEventType = $callEventType;
        return $this;
    }

    public function getCallId(): ?string
    {
        return $this->callId;
    }

    public function setCallId(?string $callId): self
    {
        $this->callId = $callId;
        return $this;
    }

    public function getCallParticipants(): array
    {
        return $this->callParticipants;
    }

    public function setCallParticipants(array $callParticipants): self
    {
        $this->callParticipants = $callParticipants;
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
