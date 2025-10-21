<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBilledUsage resources
 *
 * Available select fields:
 */
class PartnersBillingBilledUsageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingBilledUsage
     */

    /**
     * Select specific PartnersBillingBilledUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
