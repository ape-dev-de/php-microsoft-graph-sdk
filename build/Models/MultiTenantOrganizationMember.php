<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMember
 */
class MultiTenantOrganizationMember
{
    /**
     * Tenant ID of the tenant that added the tenant to the multitenant organization. Read-only.
     */
    private ?string $addedByTenantId;

    /**
     * Date and time when the tenant was added to the multitenant organization. Read-only.
     */
    private ?\DateTimeInterface $addedDateTime;

    /**
     * Display name of the tenant added to the multitenant organization.
     */
    private ?string $displayName;

    /**
     * Date and time when the tenant joined the multitenant organization. Read-only.
     */
    private ?\DateTimeInterface $joinedDateTime;

    /**
     * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization but tenants with the member role can only participate in a multitenant organization. There can be multiple tenants with the owner role in a multitenant organization.
     */
    private ?string $role;

    /**
     * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
     */
    private ?string $state;

    /**
     * Tenant ID of the Microsoft Entra tenant added to the multitenant organization. Set at the time tenant is added.Supports $filter. Key.
     */
    private ?string $tenantId;

    /**
     * Details of the processing status for a tenant in a multitenant organization. Read-only. Nullable.
     */
    private ?string $transitionDetails;


    public function getAddedByTenantId(): ?string
    {
        return $this->addedByTenantId;
    }

    public function setAddedByTenantId(?string $addedByTenantId): self
    {
        $this->addedByTenantId = $addedByTenantId;
        return $this;
    }

    public function getAddedDateTime(): ?\DateTimeInterface
    {
        return $this->addedDateTime;
    }

    public function setAddedDateTime(?\DateTimeInterface $addedDateTime): self
    {
        $this->addedDateTime = $addedDateTime;
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

    public function getJoinedDateTime(): ?\DateTimeInterface
    {
        return $this->joinedDateTime;
    }

    public function setJoinedDateTime(?\DateTimeInterface $joinedDateTime): self
    {
        $this->joinedDateTime = $joinedDateTime;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
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

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getTransitionDetails(): ?string
    {
        return $this->transitionDetails;
    }

    public function setTransitionDetails(?string $transitionDetails): self
    {
        $this->transitionDetails = $transitionDetails;
        return $this;
    }

}
