<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingRunningOperation resources
 *
 * Available select fields:
 */
class PartnersBillingRunningOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingRunningOperation
     */

    /**
     * Select specific PartnersBillingRunningOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
