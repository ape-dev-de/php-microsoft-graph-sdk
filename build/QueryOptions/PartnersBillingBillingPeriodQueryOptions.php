<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBillingPeriod resources
 *
 * Available select fields:
 */
class PartnersBillingBillingPeriodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingBillingPeriod
     */

    /**
     * Select specific PartnersBillingBillingPeriod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
