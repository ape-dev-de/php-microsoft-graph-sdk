<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingAzureUsage resources
 *
 * Available select fields:
 * - billed
 * - unbilled
 */
class PartnersBillingAzureUsageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingAzureUsage
     */
    public const FIELD_BILLED = 'billed';
    public const FIELD_UNBILLED = 'unbilled';

    /**
     * Select specific PartnersBillingAzureUsage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
