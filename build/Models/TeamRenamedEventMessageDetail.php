<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamRenamedEventMessageDetail
 */
class TeamRenamedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * The updated name of the team.
     */
    private ?string $teamDisplayName;

    /**
     * Unique identifier of the team.
     */
    private ?string $teamId;


    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getTeamDisplayName(): ?string
    {
        return $this->teamDisplayName;
    }

    public function setTeamDisplayName(?string $teamDisplayName): self
    {
        $this->teamDisplayName = $teamDisplayName;
        return $this;
    }

    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;
        return $this;
    }

}
