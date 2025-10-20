<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureActiveDirectoryTenant resources
 *
 * Available select fields:
 * - displayName
 * - tenantId
 */
class AzureActiveDirectoryTenantQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific AzureActiveDirectoryTenant properties
     * 
     * @param array<string> $select Use AzureActiveDirectoryTenantQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
