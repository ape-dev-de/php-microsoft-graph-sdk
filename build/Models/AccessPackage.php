<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackage
 */
class AccessPackage
{
    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The description of the access package.
     */
    private ?string $description;

    /**
     * Required. The display name of the access package. Supports $filter (eq, contains).
     */
    private ?string $displayName;

    /**
     * Indicates whether the access package is hidden from the requestor.
     */
    private ?bool $isHidden;

    /**
     * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $modifiedDateTime;

    /**
     * The access packages that are incompatible with this package. Read-only.
     */
    private array $accessPackagesIncompatibleWith = [];

    /**
     * Read-only. Nullable. Supports $expand.
     */
    private array $assignmentPolicies = [];

    /**
     * Required when creating the access package. Read-only. Nullable.
     */
    private ?string $catalog;

    /**
     * The access packages whose assigned users are ineligible to be assigned this access package.
     */
    private array $incompatibleAccessPackages = [];

    /**
     * The groups whose members are ineligible to be assigned this access package.
     */
    private array $incompatibleGroups = [];

    /**
     * The resource roles and scopes in this access package.
     * @var string[]
     */
    private array $resourceRoleScopes = [];


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

    public function getIsHidden(): ?bool
    {
        return $this->isHidden;
    }

    public function setIsHidden(?bool $isHidden): self
    {
        $this->isHidden = $isHidden;
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

    public function getAccessPackagesIncompatibleWith(): array
    {
        return $this->accessPackagesIncompatibleWith;
    }

    public function setAccessPackagesIncompatibleWith(array $accessPackagesIncompatibleWith): self
    {
        $this->accessPackagesIncompatibleWith = $accessPackagesIncompatibleWith;
        return $this;
    }

    public function getAssignmentPolicies(): array
    {
        return $this->assignmentPolicies;
    }

    public function setAssignmentPolicies(array $assignmentPolicies): self
    {
        $this->assignmentPolicies = $assignmentPolicies;
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

    public function getIncompatibleAccessPackages(): array
    {
        return $this->incompatibleAccessPackages;
    }

    public function setIncompatibleAccessPackages(array $incompatibleAccessPackages): self
    {
        $this->incompatibleAccessPackages = $incompatibleAccessPackages;
        return $this;
    }

    public function getIncompatibleGroups(): array
    {
        return $this->incompatibleGroups;
    }

    public function setIncompatibleGroups(array $incompatibleGroups): self
    {
        $this->incompatibleGroups = $incompatibleGroups;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getResourceRoleScopes(): array
    {
        return $this->resourceRoleScopes;
    }

    /**
     * @param string[] $resourceRoleScopes
     */
    public function setResourceRoleScopes(array $resourceRoleScopes): self
    {
        $this->resourceRoleScopes = $resourceRoleScopes;
        return $this;
    }

}
