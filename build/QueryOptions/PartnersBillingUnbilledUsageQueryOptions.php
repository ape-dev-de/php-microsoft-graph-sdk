<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingUnbilledUsage resources
 *
 * Available select fields:
 */
class PartnersBillingUnbilledUsageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingUnbilledUsage
     */

    /**
     * Select specific PartnersBillingUnbilledUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
