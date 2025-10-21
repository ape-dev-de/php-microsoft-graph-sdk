<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PolicyTemplate
 */
class PolicyTemplate
{
    /**
     * Defines an optional cross-tenant access policy template with user synchronization settings for a multitenant organization.
     */
    private ?string $multiTenantOrganizationIdentitySynchronization;

    /**
     * Defines an optional cross-tenant access policy template with inbound and outbound partner configuration settings for a multitenant organization.
     */
    private ?string $multiTenantOrganizationPartnerConfiguration;


    public function getMultiTenantOrganizationIdentitySynchronization(): ?string
    {
        return $this->multiTenantOrganizationIdentitySynchronization;
    }

    public function setMultiTenantOrganizationIdentitySynchronization(?string $multiTenantOrganizationIdentitySynchronization): self
    {
        $this->multiTenantOrganizationIdentitySynchronization = $multiTenantOrganizationIdentitySynchronization;
        return $this;
    }

    public function getMultiTenantOrganizationPartnerConfiguration(): ?string
    {
        return $this->multiTenantOrganizationPartnerConfiguration;
    }

    public function setMultiTenantOrganizationPartnerConfiguration(?string $multiTenantOrganizationPartnerConfiguration): self
    {
        $this->multiTenantOrganizationPartnerConfiguration = $multiTenantOrganizationPartnerConfiguration;
        return $this;
    }

}
