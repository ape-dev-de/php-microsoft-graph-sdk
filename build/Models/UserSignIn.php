<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignIn
 */
class UserSignIn
{
    /**
     * TenantId of the guest user as applies to Microsoft Entra B2B scenarios.
     */
    private ?string $externalTenantId;

    /**
     */
    private ?string $externalUserType;

    /**
     * Object ID of the user.
     */
    private ?string $userId;


    public function getExternalTenantId(): ?string
    {
        return $this->externalTenantId;
    }

    public function setExternalTenantId(?string $externalTenantId): self
    {
        $this->externalTenantId = $externalTenantId;
        return $this;
    }

    public function getExternalUserType(): ?string
    {
        return $this->externalUserType;
    }

    public function setExternalUserType(?string $externalUserType): self
    {
        $this->externalUserType = $externalUserType;
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
