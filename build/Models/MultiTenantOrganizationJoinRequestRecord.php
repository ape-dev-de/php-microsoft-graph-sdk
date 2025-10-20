<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationJoinRequestRecord
 */
class MultiTenantOrganizationJoinRequestRecord
{
    /**
     * Tenant ID of the Microsoft Entra tenant that added a tenant to the multitenant organization. To reset a failed join request, set addedByTenantId to 00000000-0000-0000-0000-000000000000. Required.
     */
    private ?string $addedByTenantId;

    /**
     * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
     */
    private ?string $memberState;

    /**
     * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization. There can be multiple tenants with the owner role in a multitenant organization. Tenants with the member role can participate in a multitenant organization.
     */
    private ?string $role;

    /**
     * Details of the processing status for a tenant joining a multitenant organization. Read-only.
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

    public function getMemberState(): ?string
    {
        return $this->memberState;
    }

    public function setMemberState(?string $memberState): self
    {
        $this->memberState = $memberState;
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
