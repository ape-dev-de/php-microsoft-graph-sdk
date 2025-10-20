<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessContainer
 */
class DelegatedAdminAccessContainer
{
    /**
     * The identifier of the access container (for example, a security group). For ''securityGroup'' access containers, this must be a valid ID of a Microsoft Entra security group in the Microsoft partner''s tenant.
     */
    private ?string $accessContainerId;

    /**
     */
    private ?string $accessContainerType;

    public function getAccessContainerId(): ?string
    {
        return $this->accessContainerId;
    }

    public function setAccessContainerId(?string $accessContainerId): self
    {
        $this->accessContainerId = $accessContainerId;
        return $this;
    }

    public function getAccessContainerType(): ?string
    {
        return $this->accessContainerType;
    }

    public function setAccessContainerType(?string $accessContainerType): self
    {
        $this->accessContainerType = $accessContainerType;
        return $this;
    }

}
