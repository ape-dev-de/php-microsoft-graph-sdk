<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InviteNewBotResponse
 */
class InviteNewBotResponse
{
    /**
     * URI to receive new incoming call notification.
     */
    private ?string $inviteUri;


    public function getInviteUri(): ?string
    {
        return $this->inviteUri;
    }

    public function setInviteUri(?string $inviteUri): self
    {
        $this->inviteUri = $inviteUri;
        return $this;
    }

}
