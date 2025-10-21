<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TenantRelationship
 */
class TenantRelationship
{
    public function __construct(
        /** The customer who has a delegated admin relationship with a Microsoft partner. */
        public array $delegatedAdminCustomers = [],
        /** The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant. */
        public array $delegatedAdminRelationships = [],
        /** Defines an organization with more than one instance of Microsoft Entra ID. */
        public ?string $multiTenantOrganization = null
    ) {}
}
