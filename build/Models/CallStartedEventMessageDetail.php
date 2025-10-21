<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallStartedEventMessageDetail
 */
class CallStartedEventMessageDetail
{
    /**
     * Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     */
    private ?string $callEventType;

    /**
     * Unique identifier of the call.
     */
    private ?string $callId;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;


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
