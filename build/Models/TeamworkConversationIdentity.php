<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkConversationIdentity
 */
class TeamworkConversationIdentity
{
    /**
     * Type of conversation. Possible values are: team, channel, chat, and unknownFutureValue.
     */
    private ?string $conversationIdentityType;

    public function getConversationIdentityType(): ?string
    {
        return $this->conversationIdentityType;
    }

    public function setConversationIdentityType(?string $conversationIdentityType): self
    {
        $this->conversationIdentityType = $conversationIdentityType;
        return $this;
    }

}
