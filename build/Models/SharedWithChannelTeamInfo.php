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
     * @var string[]
     */
    private array $allowedMembers = [];


    public function getIsHostTeam(): ?bool
    {
        return $this->isHostTeam;
    }

    public function setIsHostTeam(?bool $isHostTeam): self
    {
        $this->isHostTeam = $isHostTeam;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedMembers(): array
    {
        return $this->allowedMembers;
    }

    /**
     * @param string[] $allowedMembers
     */
    public function setAllowedMembers(array $allowedMembers): self
    {
        $this->allowedMembers = $allowedMembers;
        return $this;
    }

}
