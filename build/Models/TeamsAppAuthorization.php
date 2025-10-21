<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppAuthorization
 */
class TeamsAppAuthorization
{
    /**
     * The registration ID of the Microsoft Entra app ID associated with the teamsApp.
     */
    private ?string $clientAppId;

    /**
     * Set of permissions required by the teamsApp.
     */
    private ?string $requiredPermissionSet;


    public function getClientAppId(): ?string
    {
        return $this->clientAppId;
    }

    public function setClientAppId(?string $clientAppId): self
    {
        $this->clientAppId = $clientAppId;
        return $this;
    }

    public function getRequiredPermissionSet(): ?string
    {
        return $this->requiredPermissionSet;
    }

    public function setRequiredPermissionSet(?string $requiredPermissionSet): self
    {
        $this->requiredPermissionSet = $requiredPermissionSet;
        return $this;
    }

}
