<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyTargetConfigurationAccessType resources
 *
 * Available select fields:
 */
class CrossTenantAccessPolicyTargetConfigurationAccessTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantAccessPolicyTargetConfigurationAccessType
     */

    /**
     * Select specific CrossTenantAccessPolicyTargetConfigurationAccessType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
