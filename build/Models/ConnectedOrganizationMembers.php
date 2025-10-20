<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConnectedOrganizationMembers
 */
class ConnectedOrganizationMembers
{
    /**
     * The ID of the connected organization in entitlement management.
     */
    private ?string $connectedOrganizationId;

    /**
     * The name of the connected organization.
     */
    private ?string $description;

    public function getConnectedOrganizationId(): ?string
    {
        return $this->connectedOrganizationId;
    }

    public function setConnectedOrganizationId(?string $connectedOrganizationId): self
    {
        $this->connectedOrganizationId = $connectedOrganizationId;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

}
