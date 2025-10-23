<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganization
 */
class MultiTenantOrganization
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date when multitenant organization was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Description of the multitenant organization. */
    public ?string $description = null;

    /** Display name of the multitenant organization. */
    public ?string $displayName = null;

    /** 
     * State of the multitenant organization. The possible values are: active, inactive, unknownFutureValue. active indicates the multitenant organization is created. inactive indicates the multitenant organization isn't created. Read-only.
     * @var MultiTenantOrganizationState|\stdClass|null
     */
    public mixed $state = null;

    /** 
     * Defines the status of a tenant joining a multitenant organization.
     * @var MultiTenantOrganizationJoinRequestRecord|\stdClass|null
     */
    public mixed $joinRequest = null;

    /** 
     * Defines tenants added to a multitenant organization.
     * @var MultiTenantOrganizationMember[]
     */
    public array $tenants = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['joinRequest'])) {
            $this->joinRequest = $data['joinRequest'];
        }
        if (isset($data['tenants'])) {
            $this->tenants = $data['tenants'];
        }
    }
}
