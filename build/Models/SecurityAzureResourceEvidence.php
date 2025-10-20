<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAzureResourceEvidence
 */
class SecurityAzureResourceEvidence
{
    /**
     * The unique identifier for the Azure resource.
     */
    private ?string $resourceId;

    /**
     * The name of the resource.
     */
    private ?string $resourceName;

    /**
     * The type of the resource.
     */
    private ?string $resourceType;

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getResourceName(): ?string
    {
        return $this->resourceName;
    }

    public function setResourceName(?string $resourceName): self
    {
        $this->resourceName = $resourceName;
        return $this;
    }

    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;
        return $this;
    }

}
