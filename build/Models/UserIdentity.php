<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserIdentity
 */
class UserIdentity
{
    /**
     * Indicates the client IP address associated with the user performing the activity (audit log only).
     */
    private ?string $ipAddress;

    /**
     * The userPrincipalName attribute of the user.
     */
    private ?string $userPrincipalName;


    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
