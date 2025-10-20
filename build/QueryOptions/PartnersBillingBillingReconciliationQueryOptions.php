<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBillingReconciliation resources
 *
 * Available select fields:
 * - billed
 * - unbilled
 */
class PartnersBillingBillingReconciliationQueryOptions extends QueryOptions
{
    public const FIELD_BILLED = 'billed';
    public const FIELD_UNBILLED = 'unbilled';

    /**
     * Select specific PartnersBillingBillingReconciliation properties
     * 
     * @param array<string> $select Use PartnersBillingBillingReconciliationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
