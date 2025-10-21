<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityAmazonResourceEvidence
 */
class SecurityAmazonResourceEvidence
{
    /**
     * The unique identifier for the Amazon account.
     */
    private ?string $amazonAccountId;

    /**
     * The Amazon resource identifier (ARN) for the cloud resource.
     */
    private ?string $amazonResourceId;

    /**
     * The name of the resource.
     */
    private ?string $resourceName;

    /**
     * The type of the resource.
     */
    private ?string $resourceType;


    public function getAmazonAccountId(): ?string
    {
        return $this->amazonAccountId;
    }

    public function setAmazonAccountId(?string $amazonAccountId): self
    {
        $this->amazonAccountId = $amazonAccountId;
        return $this;
    }

    public function getAmazonResourceId(): ?string
    {
        return $this->amazonResourceId;
    }

    public function setAmazonResourceId(?string $amazonResourceId): self
    {
        $this->amazonResourceId = $amazonResourceId;
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
