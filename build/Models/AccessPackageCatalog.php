<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageCatalog
 */
class AccessPackageCatalog
{
    /**
     * Whether the catalog is created by a user or entitlement management. The possible values are: userManaged, serviceDefault, serviceManaged, unknownFutureValue.
     */
    private ?string $catalogType;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the access package catalog.
     */
    private ?string $description;

    /**
     * The display name of the access package catalog.
     */
    private ?string $displayName;

    /**
     * Whether the access packages in this catalog can be requested by users outside of the tenant.
     */
    private ?bool $isExternallyVisible;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * Has the value published if the access packages are available for management. The possible values are: unpublished, published, unknownFutureValue.
     */
    private ?string $state;

    /**
     * The access packages in this catalog. Read-only. Nullable.
     */
    private array $accessPackages = [];

    /**
     */
    private array $customWorkflowExtensions = [];

    /**
     */
    private array $resourceRoles = [];

    /**
     * Access package resources in this catalog.
     */
    private array $resources = [];

    /**
     * @var string[]
     */
    private array $resourceScopes = [];


    public function getCatalogType(): ?string
    {
        return $this->catalogType;
    }

    public function setCatalogType(?string $catalogType): self
    {
        $this->catalogType = $catalogType;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getIsExternallyVisible(): ?bool
    {
        return $this->isExternallyVisible;
    }

    public function setIsExternallyVisible(?bool $isExternallyVisible): self
    {
        $this->isExternallyVisible = $isExternallyVisible;
        return $this;
    }

    public function getModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->modifiedDateTime;
    }

    public function setModifiedDateTime(?\DateTimeInterface $modifiedDateTime): self
    {
        $this->modifiedDateTime = $modifiedDateTime;
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

    public function getAccessPackages(): array
    {
        return $this->accessPackages;
    }

    public function setAccessPackages(array $accessPackages): self
    {
        $this->accessPackages = $accessPackages;
        return $this;
    }

    public function getCustomWorkflowExtensions(): array
    {
        return $this->customWorkflowExtensions;
    }

    public function setCustomWorkflowExtensions(array $customWorkflowExtensions): self
    {
        $this->customWorkflowExtensions = $customWorkflowExtensions;
        return $this;
    }

    public function getResourceRoles(): array
    {
        return $this->resourceRoles;
    }

    public function setResourceRoles(array $resourceRoles): self
    {
        $this->resourceRoles = $resourceRoles;
        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResourceScopes(): array
    {
        return $this->resourceScopes;
    }

    /**
     * @param string[] $resourceScopes
     */
    public function setResourceScopes(array $resourceScopes): self
    {
        $this->resourceScopes = $resourceScopes;
        return $this;
    }

}
