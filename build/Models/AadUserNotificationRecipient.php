<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AadUserNotificationRecipient
 */
class AadUserNotificationRecipient
{
    /**
     * Microsoft Entra user identifier. Use the List users method to get this ID.
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
