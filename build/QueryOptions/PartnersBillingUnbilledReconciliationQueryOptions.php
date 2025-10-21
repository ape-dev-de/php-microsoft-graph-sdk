<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingUnbilledReconciliation resources
 *
 * Available select fields:
 */
class PartnersBillingUnbilledReconciliationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingUnbilledReconciliation
     */

    /**
     * Select specific PartnersBillingUnbilledReconciliation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
