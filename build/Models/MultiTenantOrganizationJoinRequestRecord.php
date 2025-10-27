<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationJoinRequestRecord
 */
class MultiTenantOrganizationJoinRequestRecord
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Tenant ID of the Microsoft Entra tenant that added a tenant to the multitenant organization. To reset a failed join request, set addedByTenantId to 00000000-0000-0000-0000-000000000000. Required. */
    public ?string $addedByTenantId = null;

    /** 
     * State of the tenant in the multitenant organization. The possible values are: pending, active, removed, unknownFutureValue. Tenants in the pending state must join the multitenant organization to participate in the multitenant organization. Tenants in the active state can participate in the multitenant organization. Tenants in the removed state are in the process of being removed from the multitenant organization. Read-only.
     * @var MultiTenantOrganizationMemberState|\stdClass|null
     */
    public mixed $memberState = null;

    /** 
     * Role of the tenant in the multitenant organization. The possible values are: owner, member (default), unknownFutureValue. Tenants with the owner role can manage the multitenant organization. There can be multiple tenants with the owner role in a multitenant organization. Tenants with the member role can participate in a multitenant organization.
     * @var MultiTenantOrganizationMemberRole|\stdClass|null
     */
    public mixed $role = null;

    /** 
     * Details of the processing status for a tenant joining a multitenant organization. Read-only.
     * @var MultiTenantOrganizationJoinRequestTransitionDetails|\stdClass|null
     */
    public mixed $transitionDetails = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['addedByTenantId'])) {
            $this->addedByTenantId = $data['addedByTenantId'];
        }
        if (isset($data['memberState'])) {
            $this->memberState = is_array($data['memberState']) ? new MultiTenantOrganizationMemberState($data['memberState']) : $data['memberState'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new MultiTenantOrganizationMemberRole($data['role']) : $data['role'];
        }
        if (isset($data['transitionDetails'])) {
            $this->transitionDetails = is_array($data['transitionDetails']) ? new MultiTenantOrganizationJoinRequestTransitionDetails($data['transitionDetails']) : $data['transitionDetails'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
