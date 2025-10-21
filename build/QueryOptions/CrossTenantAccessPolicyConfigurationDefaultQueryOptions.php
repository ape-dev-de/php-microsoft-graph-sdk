<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyConfigurationDefault resources
 *
 * Available select fields:
 */
class CrossTenantAccessPolicyConfigurationDefaultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CrossTenantAccessPolicyConfigurationDefault
     */

    /**
     * Select specific CrossTenantAccessPolicyConfigurationDefault properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
