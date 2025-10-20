<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedTeam
 */
class DeletedTeam
{
    /**
     * The channels that are either shared with this deleted team or created in this deleted team.
     */
    private ?string $channels;

    public function getChannels(): ?string
    {
        return $this->channels;
    }

    public function setChannels(?string $channels): self
    {
        $this->channels = $channels;
        return $this;
    }

}
