<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTemplate
 */
class PolicyTemplate
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Defines an optional cross-tenant access policy template with user synchronization settings for a multitenant organization.
     * @var MultiTenantOrganizationIdentitySyncPolicyTemplate|\stdClass|null
     */
    public mixed $multiTenantOrganizationIdentitySynchronization = null;

    /** 
     * Defines an optional cross-tenant access policy template with inbound and outbound partner configuration settings for a multitenant organization.
     * @var MultiTenantOrganizationPartnerConfigurationTemplate|\stdClass|null
     */
    public mixed $multiTenantOrganizationPartnerConfiguration = null;


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
        if (isset($data['multiTenantOrganizationIdentitySynchronization'])) {
            $this->multiTenantOrganizationIdentitySynchronization = is_array($data['multiTenantOrganizationIdentitySynchronization']) ? new MultiTenantOrganizationIdentitySyncPolicyTemplate($data['multiTenantOrganizationIdentitySynchronization']) : $data['multiTenantOrganizationIdentitySynchronization'];
        }
        if (isset($data['multiTenantOrganizationPartnerConfiguration'])) {
            $this->multiTenantOrganizationPartnerConfiguration = is_array($data['multiTenantOrganizationPartnerConfiguration']) ? new MultiTenantOrganizationPartnerConfigurationTemplate($data['multiTenantOrganizationPartnerConfiguration']) : $data['multiTenantOrganizationPartnerConfiguration'];
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
