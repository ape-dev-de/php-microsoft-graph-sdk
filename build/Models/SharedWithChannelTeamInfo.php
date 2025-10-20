<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharedWithChannelTeamInfo
 */
class SharedWithChannelTeamInfo
{
    /**
     * Indicates whether the team is the host of the channel.
     */
    private ?bool $isHostTeam;

    /**
     * A collection of team members who have access to the shared channel.
     */
    private ?string $allowedMembers;

    public function getIsHostTeam(): ?bool
    {
        return $this->isHostTeam;
    }

    public function setIsHostTeam(?bool $isHostTeam): self
    {
        $this->isHostTeam = $isHostTeam;
        return $this;
    }

    public function getAllowedMembers(): ?string
    {
        return $this->allowedMembers;
    }

    public function setAllowedMembers(?string $allowedMembers): self
    {
        $this->allowedMembers = $allowedMembers;
        return $this;
    }

}
