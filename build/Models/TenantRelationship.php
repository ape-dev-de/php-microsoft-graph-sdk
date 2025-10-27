<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantRelationship
 */
class TenantRelationship
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The customer who has a delegated admin relationship with a Microsoft partner.
     * @var DelegatedAdminCustomer[]
     */
    public array $delegatedAdminCustomers = [];

    /** 
     * The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
     * @var DelegatedAdminRelationship[]
     */
    public array $delegatedAdminRelationships = [];

    /** 
     * Defines an organization with more than one instance of Microsoft Entra ID.
     * @var MultiTenantOrganization|\stdClass|null
     */
    public MultiTenantOrganization|\stdClass|null $multiTenantOrganization = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['delegatedAdminCustomers'])) {
            $this->delegatedAdminCustomers = $data['delegatedAdminCustomers'];
        }
        if (isset($data['delegatedAdminRelationships'])) {
            $this->delegatedAdminRelationships = $data['delegatedAdminRelationships'];
        }
        if (isset($data['multiTenantOrganization'])) {
            $this->multiTenantOrganization = is_array($data['multiTenantOrganization']) ? new MultiTenantOrganization($data['multiTenantOrganization']) : $data['multiTenantOrganization'];
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
