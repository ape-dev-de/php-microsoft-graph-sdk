<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnerTenantType resources
 *
 * Available select fields:
 */
class PartnerTenantTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnerTenantType
     */

    /**
     * Select specific PartnerTenantType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
