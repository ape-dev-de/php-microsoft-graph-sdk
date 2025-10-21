<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMember
 */
class MultiTenantOrganizationMember
{
    public function __construct(
        /** Tenant ID of the tenant that added the tenant to the multitenant organization. Read-only. */
        public ?string $addedByTenantId = null,
        /** Date and time when the tenant was added to the multitenant organization. Read-only. */
        public ?\DateTimeInterface $addedDateTime = null,
        /** Display name of the tenant added to the multitenant organization. */
        public ?string $displayName = null,
        /** Date and time when the tenant joined the multitenant organization. Read-only. */
        public ?\DateTimeInterface $joinedDateTime = null,
        /** Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization but tenants with the member role can only participate in a multitenant organization. There can be multiple tenants with the owner role in a multitenant organization. */
        public ?string $role = null,
        /** State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only. */
        public ?string $state = null,
        /** Tenant ID of the Microsoft Entra tenant added to the multitenant organization. Set at the time tenant is added.Supports $filter. Key. */
        public ?string $tenantId = null,
        /** Details of the processing status for a tenant in a multitenant organization. Read-only. Nullable. */
        public ?string $transitionDetails = null
    ) {}
}
