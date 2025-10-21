<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SkypeForBusinessUserConversationMember
 */
class SkypeForBusinessUserConversationMember
{
    /**
     * ID of the tenant that the user belongs to.
     */
    private ?string $tenantId;

    /**
     * Microsoft Entra ID of the user.
     */
    private ?string $userId;


    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

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
