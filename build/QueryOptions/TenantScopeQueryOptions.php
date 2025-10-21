<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TenantScope resources
 *
 * Available select fields:
 */
class TenantScopeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TenantScope
     */

    /**
     * Select specific TenantScope properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
