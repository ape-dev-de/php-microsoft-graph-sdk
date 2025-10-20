<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBilling resources
 *
 * Available select fields:
 * - manifests
 * - operations
 * - reconciliation
 * - usage
 */
class PartnersBillingBillingQueryOptions extends QueryOptions
{
    public const FIELD_MANIFESTS = 'manifests';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_RECONCILIATION = 'reconciliation';
    public const FIELD_USAGE = 'usage';

    /**
     * Select specific PartnersBillingBilling properties
     * 
     * @param array<string> $select Use PartnersBillingBillingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
