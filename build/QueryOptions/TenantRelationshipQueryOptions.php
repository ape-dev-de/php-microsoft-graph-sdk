<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantRelationship resources
 *
 * Available select fields:
 * - delegatedAdminCustomers
 * - delegatedAdminRelationships
 * - multiTenantOrganization
 */
class TenantRelationshipQueryOptions extends QueryOptions
{
    public const FIELD_DELEGATED_ADMIN_CUSTOMERS = 'delegatedAdminCustomers';
    public const FIELD_DELEGATED_ADMIN_RELATIONSHIPS = 'delegatedAdminRelationships';
    public const FIELD_MULTI_TENANT_ORGANIZATION = 'multiTenantOrganization';

    /**
     * Select specific TenantRelationship properties
     * 
     * @param array<string> $select Use TenantRelationshipQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
