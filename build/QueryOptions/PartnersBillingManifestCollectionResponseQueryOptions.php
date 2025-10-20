<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingManifestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class PartnersBillingManifestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PartnersBillingManifestCollectionResponse properties
     * 
     * @param array<string> $select Use PartnersBillingManifestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
