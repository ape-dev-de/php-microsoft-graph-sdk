<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncomingContext
 */
class IncomingContext
{
    /**
     * The ID of the participant that is under observation. Read-only.
     */
    private ?string $observedParticipantId;

    /**
     * The identity that the call is happening on behalf of.
     */
    private ?string $onBehalfOf;

    /**
     * The ID of the participant that triggered the incoming call. Read-only.
     */
    private ?string $sourceParticipantId;

    /**
     * The identity that transferred the call.
     */
    private ?string $transferor;

    public function getObservedParticipantId(): ?string
    {
        return $this->observedParticipantId;
    }

    public function setObservedParticipantId(?string $observedParticipantId): self
    {
        $this->observedParticipantId = $observedParticipantId;
        return $this;
    }

    public function getOnBehalfOf(): ?string
    {
        return $this->onBehalfOf;
    }

    public function setOnBehalfOf(?string $onBehalfOf): self
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    public function getSourceParticipantId(): ?string
    {
        return $this->sourceParticipantId;
    }

    public function setSourceParticipantId(?string $sourceParticipantId): self
    {
        $this->sourceParticipantId = $sourceParticipantId;
        return $this;
    }

    public function getTransferor(): ?string
    {
        return $this->transferor;
    }

    public function setTransferor(?string $transferor): self
    {
        $this->transferor = $transferor;
        return $this;
    }

}
