<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossCloudAzureActiveDirectoryTenant resources
 *
 * Available select fields:
 */
class CrossCloudAzureActiveDirectoryTenantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossCloudAzureActiveDirectoryTenant
     */

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
