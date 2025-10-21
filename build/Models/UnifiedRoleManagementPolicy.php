<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRoleManagementPolicy
 */
class UnifiedRoleManagementPolicy
{
    /**
     * Description for the policy.
     */
    private ?string $description;

    /**
     * Display name for the policy.
     */
    private ?string $displayName;

    /**
     * This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne).
     */
    private ?bool $isOrganizationDefault;

    /**
     * The identity who last modified the role setting.
     */
    private ?string $lastModifiedBy;

    /**
     * The time when the role setting was last modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
     */
    private ?string $scopeId;

    /**
     * The type of the scope where the policy is created. One of Directory, DirectoryRole, Group. Required.
     */
    private ?string $scopeType;

    /**
     * The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand.
     */
    private array $effectiveRules = [];

    /**
     * The collection of rules like approval rules and expiration rules. Supports $expand.
     * @var string[]
     */
    private array $rules = [];


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

    public function getIsOrganizationDefault(): ?bool
    {
        return $this->isOrganizationDefault;
    }

    public function setIsOrganizationDefault(?bool $isOrganizationDefault): self
    {
        $this->isOrganizationDefault = $isOrganizationDefault;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getScopeId(): ?string
    {
        return $this->scopeId;
    }

    public function setScopeId(?string $scopeId): self
    {
        $this->scopeId = $scopeId;
        return $this;
    }

    public function getScopeType(): ?string
    {
        return $this->scopeType;
    }

    public function setScopeType(?string $scopeType): self
    {
        $this->scopeType = $scopeType;
        return $this;
    }

    public function getEffectiveRules(): array
    {
        return $this->effectiveRules;
    }

    public function setEffectiveRules(array $effectiveRules): self
    {
        $this->effectiveRules = $effectiveRules;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * @param string[] $rules
     */
    public function setRules(array $rules): self
    {
        $this->rules = $rules;
        return $this;
    }

}
