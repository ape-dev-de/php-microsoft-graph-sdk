<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationMember
 */
class MultiTenantOrganizationMember
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** Tenant ID of the tenant that added the tenant to the multitenant organization. Read-only. */
    public ?string $addedByTenantId = null;

    /** Date and time when the tenant was added to the multitenant organization. Read-only. */
    public ?\DateTimeInterface $addedDateTime = null;

    /** Display name of the tenant added to the multitenant organization. */
    public ?string $displayName = null;

    /** Date and time when the tenant joined the multitenant organization. Read-only. */
    public ?\DateTimeInterface $joinedDateTime = null;

    /** 
     * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization but tenants with the member role can only participate in a multitenant organization. There can be multiple tenants with the owner role in a multitenant organization.
     * @var MultiTenantOrganizationMemberRole|\stdClass|null
     */
    public mixed $role = null;

    /** 
     * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
     * @var MultiTenantOrganizationMemberState|\stdClass|null
     */
    public mixed $state = null;

    /** Tenant ID of the Microsoft Entra tenant added to the multitenant organization. Set at the time tenant is added.Supports $filter. Key. */
    public ?string $tenantId = null;

    /** 
     * Details of the processing status for a tenant in a multitenant organization. Read-only. Nullable.
     * @var MultiTenantOrganizationMemberTransitionDetails|\stdClass|null
     */
    public mixed $transitionDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['addedByTenantId'])) {
            $this->addedByTenantId = $data['addedByTenantId'];
        }
        if (isset($data['addedDateTime'])) {
            $this->addedDateTime = is_string($data['addedDateTime']) ? new \DateTimeImmutable($data['addedDateTime']) : $data['addedDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['joinedDateTime'])) {
            $this->joinedDateTime = is_string($data['joinedDateTime']) ? new \DateTimeImmutable($data['joinedDateTime']) : $data['joinedDateTime'];
        }
        if (isset($data['role'])) {
            $this->role = $data['role'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['transitionDetails'])) {
            $this->transitionDetails = $data['transitionDetails'];
        }
    }
}
