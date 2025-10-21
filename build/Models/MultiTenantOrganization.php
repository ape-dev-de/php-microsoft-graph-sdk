<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganization
 */
class MultiTenantOrganization
{
    /**
     * Date when multitenant organization was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the multitenant organization.
     */
    private ?string $description;

    /**
     * Display name of the multitenant organization.
     */
    private ?string $displayName;

    /**
     * State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn''t created. Read-only.
     */
    private ?string $state;

    /**
     * Defines the status of a tenant joining a multitenant organization.
     */
    private ?string $joinRequest;

    /**
     * Defines tenants added to a multitenant organization.
     * @var string[]
     */
    private array $tenants = [];


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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getJoinRequest(): ?string
    {
        return $this->joinRequest;
    }

    public function setJoinRequest(?string $joinRequest): self
    {
        $this->joinRequest = $joinRequest;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTenants(): array
    {
        return $this->tenants;
    }

    /**
     * @param string[] $tenants
     */
    public function setTenants(array $tenants): self
    {
        $this->tenants = $tenants;
        return $this;
    }

}
