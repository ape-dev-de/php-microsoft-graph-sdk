<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantRelationship
 */
class TenantRelationship
{
    /**
     * The customer who has a delegated admin relationship with a Microsoft partner.
     */
    private array $delegatedAdminCustomers = [];

    /**
     * The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
     */
    private array $delegatedAdminRelationships = [];

    /**
     * Defines an organization with more than one instance of Microsoft Entra ID.
     */
    private ?string $multiTenantOrganization;

    public function getDelegatedAdminCustomers(): array
    {
        return $this->delegatedAdminCustomers;
    }

    public function setDelegatedAdminCustomers(array $delegatedAdminCustomers): self
    {
        $this->delegatedAdminCustomers = $delegatedAdminCustomers;
        return $this;
    }

    public function getDelegatedAdminRelationships(): array
    {
        return $this->delegatedAdminRelationships;
    }

    public function setDelegatedAdminRelationships(array $delegatedAdminRelationships): self
    {
        $this->delegatedAdminRelationships = $delegatedAdminRelationships;
        return $this;
    }

    public function getMultiTenantOrganization(): ?string
    {
        return $this->multiTenantOrganization;
    }

    public function setMultiTenantOrganization(?string $multiTenantOrganization): self
    {
        $this->multiTenantOrganization = $multiTenantOrganization;
        return $this;
    }

}
