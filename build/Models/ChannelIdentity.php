<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelIdentity
 */
class ChannelIdentity
{
    /**
     * The identity of the channel in which the message was posted.
     */
    private ?string $channelId;

    /**
     * The identity of the team in which the message was posted.
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
