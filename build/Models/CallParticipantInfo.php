<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallParticipantInfo
 */
class CallParticipantInfo
{
    /**
     * Identity of the call participant.
     */
    private ?string $participant;


    public function getParticipant(): ?string
    {
        return $this->participant;
    }

    public function setParticipant(?string $participant): self
    {
        $this->participant = $participant;
        return $this;
    }

}
