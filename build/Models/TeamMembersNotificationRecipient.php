<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMembersNotificationRecipient
 */
class TeamMembersNotificationRecipient
{
    /**
     * The unique identifier for the team whose members should receive the notification.
     */
    private ?string $teamId;


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
