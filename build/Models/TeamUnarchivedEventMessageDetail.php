<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamUnarchivedEventMessageDetail
 */
class TeamUnarchivedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

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
