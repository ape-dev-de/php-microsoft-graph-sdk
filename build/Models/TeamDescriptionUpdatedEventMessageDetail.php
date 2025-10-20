<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamDescriptionUpdatedEventMessageDetail
 */
class TeamDescriptionUpdatedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * The updated description for the team.
     */
    private ?string $teamDescription;

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

    public function getTeamDescription(): ?string
    {
        return $this->teamDescription;
    }

    public function setTeamDescription(?string $teamDescription): self
    {
        $this->teamDescription = $teamDescription;
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
