<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureActiveDirectoryTenant resources
 *
 * Available select fields:
 */
class AzureActiveDirectoryTenantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureActiveDirectoryTenant
     */

    /**
     * Select specific AzureActiveDirectoryTenant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
