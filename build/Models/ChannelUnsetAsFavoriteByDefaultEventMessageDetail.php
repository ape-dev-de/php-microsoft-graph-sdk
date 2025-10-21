<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelUnsetAsFavoriteByDefaultEventMessageDetail
 */
class ChannelUnsetAsFavoriteByDefaultEventMessageDetail
{
    /**
     * Unique identifier of the channel.
     */
    private ?string $channelId;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;


    public function getChannelId(): ?string
    {
        return $this->channelId;
    }

    public function setChannelId(?string $channelId): self
    {
        $this->channelId = $channelId;
        return $this;
    }

    public function getInitiator(): ?string
    {
        return $this->initiator;
    }

    public function setInitiator(?string $initiator): self
    {
        $this->initiator = $initiator;
        return $this;
    }

}
