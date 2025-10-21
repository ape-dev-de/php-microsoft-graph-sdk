<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantProtectionScopeContainer resources
 *
 * Available select fields:
 */
class TenantProtectionScopeContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TenantProtectionScopeContainer
     */

    /**
     * Select specific TenantProtectionScopeContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
