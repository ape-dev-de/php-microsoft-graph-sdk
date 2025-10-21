<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossCloudAzureActiveDirectoryTenant resources
 *
 * Available select fields:
 * - cloudInstance
 * - displayName
 * - tenantId
 */
class CrossCloudAzureActiveDirectoryTenantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossCloudAzureActiveDirectoryTenant
     */
    public const FIELD_CLOUD_INSTANCE = 'cloudInstance';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific CrossCloudAzureActiveDirectoryTenant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
