<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChannelSummary
 */
class ChannelSummary
{
    /**
     * Count of guests in a channel.
     */
    private ?float $guestsCount;

    /**
     * Indicates whether external members are included on the channel.
     */
    private ?bool $hasMembersFromOtherTenants;

    /**
     * Count of members in a channel.
     */
    private ?float $membersCount;

    /**
     * Count of owners in a channel.
     */
    private ?string $ownersCount;


    public function getGuestsCount(): ?float
    {
        return $this->guestsCount;
    }

    public function setGuestsCount(?float $guestsCount): self
    {
        $this->guestsCount = $guestsCount;
        return $this;
    }

    public function getHasMembersFromOtherTenants(): ?bool
    {
        return $this->hasMembersFromOtherTenants;
    }

    public function setHasMembersFromOtherTenants(?bool $hasMembersFromOtherTenants): self
    {
        $this->hasMembersFromOtherTenants = $hasMembersFromOtherTenants;
        return $this;
    }

    public function getMembersCount(): ?float
    {
        return $this->membersCount;
    }

    public function setMembersCount(?float $membersCount): self
    {
        $this->membersCount = $membersCount;
        return $this;
    }

    public function getOwnersCount(): ?string
    {
        return $this->ownersCount;
    }

    public function setOwnersCount(?string $ownersCount): self
    {
        $this->ownersCount = $ownersCount;
        return $this;
    }

}
