<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityResource
 */
class SecurityResource
{
    /**
     * Name of the resource that is related to current alert. Required.
     */
    private ?string $resource;

    /**
     * Represents type of security resources related to an alert. Possible values are: attacked, related.
     */
    private ?string $resourceType;

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
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
