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
     * @var string[]
     */
    private array $participants = [];


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
