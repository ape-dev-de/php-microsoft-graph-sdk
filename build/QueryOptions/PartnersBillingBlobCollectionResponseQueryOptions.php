<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingBlobCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PartnersBillingBlobCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PartnersBillingBlobCollectionResponse properties
     * 
     * @param array<string> $select Use PartnersBillingBlobCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
