<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ParticipantJoiningNotification
 */
class ParticipantJoiningNotification
{
    /**
     */
    private ?string $call;

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
