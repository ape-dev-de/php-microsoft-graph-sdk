<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteParticipantsOperation
 */
class InviteParticipantsOperation
{
    /**
     * The participants to invite.
     */
    private ?string $participants;

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
