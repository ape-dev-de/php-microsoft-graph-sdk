<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SkypeUserConversationMember
 */
class SkypeUserConversationMember
{
    /**
     * Skype ID of the user.
     */
    private ?string $skypeId;


    public function getSkypeId(): ?string
    {
        return $this->skypeId;
    }

    public function setSkypeId(?string $skypeId): self
    {
        $this->skypeId = $skypeId;
        return $this;
    }

}
