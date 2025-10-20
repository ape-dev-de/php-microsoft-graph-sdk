<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingRunningOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PartnersBillingRunningOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PartnersBillingRunningOperationCollectionResponse properties
     * 
     * @param array<string> $select Use PartnersBillingRunningOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
