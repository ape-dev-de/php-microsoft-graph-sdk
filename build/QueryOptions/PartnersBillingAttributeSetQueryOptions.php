<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingAttributeSet resources
 *
 * Available select fields:
 */
class PartnersBillingAttributeSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingAttributeSet
     */

    /**
     * Select specific PartnersBillingAttributeSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
