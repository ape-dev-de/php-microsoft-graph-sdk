<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantLeftNotification
 */
class ParticipantLeftNotification
{
    /**
     * ID of the participant under the policy who has left the meeting.
     */
    private ?string $participantId;

    /**
     */
    private ?string $call;

    public function getParticipantId(): ?string
    {
        return $this->participantId;
    }

    public function setParticipantId(?string $participantId): self
    {
        $this->participantId = $participantId;
        return $this;
    }

    public function getCall(): ?string
    {
        return $this->call;
    }

    public function setCall(?string $call): self
    {
        $this->call = $call;
        return $this;
    }

}
