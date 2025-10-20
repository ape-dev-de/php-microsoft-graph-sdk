<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingParticipantInfo
 */
class MeetingParticipantInfo
{
    /**
     * Identity information of the participant.
     */
    private ?string $identity;

    /**
     * Specifies the participant's role in the meeting.
     */
    private ?string $role;

    /**
     * User principal name of the participant.
     */
    private ?string $upn;

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getUpn(): ?string
    {
        return $this->upn;
    }

    public function setUpn(?string $upn): self
    {
        $this->upn = $upn;
        return $this;
    }

}
