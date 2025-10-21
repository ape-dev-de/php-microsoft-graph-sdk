<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamSummary
 */
class TeamSummary
{
    /**
     * Count of guests in a team.
     */
    private ?float $guestsCount;

    /**
     * Count of members in a team.
     */
    private ?float $membersCount;

    /**
     * Count of owners in a team.
     */
    private ?string $ownersCount;


    public function getGuestsCount(): ?float
    {
        return $this->guestsCount;
    }

    public function setGuestsCount(?float $guestsCount): self
    {
        $this->guestsCount = $guestsCount;
        return $this;
    }

    public function getMembersCount(): ?float
    {
        return $this->membersCount;
    }

    public function setMembersCount(?float $membersCount): self
    {
        $this->membersCount = $membersCount;
        return $this;
    }

    public function getOwnersCount(): ?string
    {
        return $this->ownersCount;
    }

    public function setOwnersCount(?string $ownersCount): self
    {
        $this->ownersCount = $ownersCount;
        return $this;
    }

}
