<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppRemovedEventMessageDetail
 */
class TeamsAppRemovedEventMessageDetail
{
    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    /**
     * Display name of the teamsApp.
     */
    private ?string $teamsAppDisplayName;

    /**
     * Unique identifier of the teamsApp.
     */
    private ?string $teamsAppId;

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

    public function getTeamsAppDisplayName(): ?string
    {
        return $this->teamsAppDisplayName;
    }

    public function setTeamsAppDisplayName(?string $teamsAppDisplayName): self
    {
        $this->teamsAppDisplayName = $teamsAppDisplayName;
        return $this;
    }

    public function getTeamsAppId(): ?string
    {
        return $this->teamsAppId;
    }

    public function setTeamsAppId(?string $teamsAppId): self
    {
        $this->teamsAppId = $teamsAppId;
        return $this;
    }

}
