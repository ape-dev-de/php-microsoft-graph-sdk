<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileThreatPartnerTenantState resources
 *
 * Available select fields:
 */
class MobileThreatPartnerTenantStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MobileThreatPartnerTenantState
     */

    /**
     * Select specific MobileThreatPartnerTenantState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
