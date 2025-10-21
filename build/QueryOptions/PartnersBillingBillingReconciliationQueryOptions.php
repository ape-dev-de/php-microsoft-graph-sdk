<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBillingReconciliation resources
 *
 * Available select fields:
 */
class PartnersBillingBillingReconciliationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingBillingReconciliation
     */

    /**
     * Select specific PartnersBillingBillingReconciliation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
