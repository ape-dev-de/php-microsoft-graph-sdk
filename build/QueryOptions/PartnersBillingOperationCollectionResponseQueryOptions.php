<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PartnersBillingOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PartnersBillingOperationCollectionResponse properties
     * 
     * @param array<string> $select Use PartnersBillingOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
