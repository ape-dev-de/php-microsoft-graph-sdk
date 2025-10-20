<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelDescriptionUpdatedEventMessageDetail
 */
class ChannelDescriptionUpdatedEventMessageDetail
{
    /**
     * The updated description of the channel.
     */
    private ?string $channelDescription;

    /**
     * Unique identifier of the channel.
     */
    private ?string $channelId;

    /**
     * Initiator of the event.
     */
    private ?string $initiator;

    public function getChannelDescription(): ?string
    {
        return $this->channelDescription;
    }

    public function setChannelDescription(?string $channelDescription): self
    {
        $this->channelDescription = $channelDescription;
        return $this;
    }

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
