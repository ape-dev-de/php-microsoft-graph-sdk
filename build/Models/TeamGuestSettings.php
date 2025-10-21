<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamGuestSettings
 */
class TeamGuestSettings
{
    /**
     * If set to true, guests can add and update channels.
     */
    private ?bool $allowCreateUpdateChannels;

    /**
     * If set to true, guests can delete channels.
     */
    private ?string $allowDeleteChannels;


    public function getAllowCreateUpdateChannels(): ?bool
    {
        return $this->allowCreateUpdateChannels;
    }

    public function setAllowCreateUpdateChannels(?bool $allowCreateUpdateChannels): self
    {
        $this->allowCreateUpdateChannels = $allowCreateUpdateChannels;
        return $this;
    }

    public function getAllowDeleteChannels(): ?string
    {
        return $this->allowDeleteChannels;
    }

    public function setAllowDeleteChannels(?string $allowDeleteChannels): self
    {
        $this->allowDeleteChannels = $allowDeleteChannels;
        return $this;
    }

}
