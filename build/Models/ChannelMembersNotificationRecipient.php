<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelMembersNotificationRecipient
 */
class ChannelMembersNotificationRecipient
{
    /**
     * The unique identifier for the channel whose members should receive the notification.
     */
    private ?string $channelId;

    /**
     * The unique identifier for the team under which the channel resides.
     */
    private ?string $teamId;

    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
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
