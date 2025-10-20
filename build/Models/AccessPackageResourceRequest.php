<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceRequest
 */
class AccessPackageResourceRequest
{
    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The type of the request. Use adminAdd to add a resource, if the caller is an administrator or resource owner, adminUpdate to update a resource, or adminRemove to remove a resource.
     */
    private ?string $requestType;

    /**
     * The outcome of whether the service was able to add the resource to the catalog. The value is delivered if the resource was added or removed, and deliveryFailed if it couldn''t be added or removed. Read-only.
     */
    private ?string $state;

    /**
     */
    private ?string $catalog;

    /**
     */
    private ?string $resource;

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    public function setRequestType(?string $requestType): self
    {
        $this->requestType = $requestType;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getCatalog(): ?string
    {
        return $this->catalog;
    }

    public function setCatalog(?string $catalog): self
    {
        $this->catalog = $catalog;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

}
