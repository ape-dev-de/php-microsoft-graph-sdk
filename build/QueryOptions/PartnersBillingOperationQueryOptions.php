<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingOperation resources
 *
 * Available select fields:
 */
class PartnersBillingOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingOperation
     */

    /**
     * Select specific PartnersBillingOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
