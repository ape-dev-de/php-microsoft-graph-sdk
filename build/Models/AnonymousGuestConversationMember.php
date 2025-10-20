<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AnonymousGuestConversationMember
 */
class AnonymousGuestConversationMember
{
    /**
     * Unique ID that represents the user. Note: This ID can change if the user leaves and rejoins the meeting, or joins from a different device.
     */
    private ?string $anonymousGuestId;

    public function getAnonymousGuestId(): ?string
    {
        return $this->anonymousGuestId;
    }

    public function setAnonymousGuestId(?string $anonymousGuestId): self
    {
        $this->anonymousGuestId = $anonymousGuestId;
        return $this;
    }

}
