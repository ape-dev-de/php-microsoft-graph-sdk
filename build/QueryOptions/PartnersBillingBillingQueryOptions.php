<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBilling resources
 *
 * Available select fields:
 */
class PartnersBillingBillingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingBilling
     */

    /**
     * Select specific PartnersBillingBilling properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
