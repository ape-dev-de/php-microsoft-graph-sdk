<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBilledReconciliation resources
 *
 * Available select fields:
 */
class PartnersBillingBilledReconciliationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingBilledReconciliation
     */

    /**
     * Select specific PartnersBillingBilledReconciliation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
