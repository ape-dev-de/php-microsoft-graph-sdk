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
     * @var string[]
     */
    private array $channels = [];


    /**
     * @return string[]
     */
    public function getChannels(): array
    {
        return $this->channels;
    }

    /**
     * @param string[] $channels
     */
    public function setChannels(array $channels): self
    {
        $this->channels = $channels;
        return $this;
    }

}
