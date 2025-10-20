<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAccountUserConversationMember
 */
class MicrosoftAccountUserConversationMember
{
    /**
     * Microsoft Account ID of the user.
     */
    private ?string $userId;

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
