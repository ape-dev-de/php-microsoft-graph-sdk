<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTemplate
 */
class PolicyTemplate
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['multiTenantOrganizationIdentitySynchronization'])) {
            $this->multiTenantOrganizationIdentitySynchronization = $data['multiTenantOrganizationIdentitySynchronization'];
        }
        if (isset($data['multiTenantOrganizationPartnerConfiguration'])) {
            $this->multiTenantOrganizationPartnerConfiguration = $data['multiTenantOrganizationPartnerConfiguration'];
        }
    }
}
